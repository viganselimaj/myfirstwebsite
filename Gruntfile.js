module.exports = function (grunt) {
    grunt.initConfig({
        
        pkg: grunt.file.readJSON('package.json'),
        autoprefixer: {
            options: {
                browsers: ["last 2 versions", "ie 8", "ie 9"],
                map: true
            },
            single_file: {
                src: "dist/css/style.css",
                dest: "dist/css/style.css"
            }
        },
        //clean: ["prod"],
        // compress: {
        //  main: {
        //      options: {
        //          archive: "<%= pkg.name %>.zip",
        //          mode: "zip",
        //          level: 9,
        //          pretty: true
        //      },
        //      files: [
        //          {
        //              expand: true,
        //              cwd: "prod/",
        //              src: ["**"],
        //              dest: "<%= pkg.name %>"
        //          }
        //      ]
        //  }
        // },
        concat: {
            options: {
                separator: '\n\n',
                banner: "/* <%= pkg.name %> - v<%= pkg.version %> - " + "<%= grunt.template.today('yyyy-mm-dd') %> */",
                footer: "/* By: <%= pkg.author %>*/",
                stripBanners: false
            },
            dev: {
                src: ['src/js/jquery.min.js', 'src/js/bxslider.js', 'src/js/owlcarusel.js', 'src/js/fancybox.js', 'src/js/main.js'],
                dest: "dist/js/all.js"
            },
        },
        connect: {
            server: {
                options: {
                    port: 1989,
                    protocol: "http",
                    open: true,
                    livereload: true,
                    base: ""
                }
            }
        },
        cssmin: {
            options: {
                compatibility: 'ie8',
                keepSpecialComments: 0,
                sourceMap: true,
                sourceMapInlineSources: true,
                advanced: false
            },
            minify: {
                expand: true,
                cwd: "dist/css/",
                src: "style.css",
                dest: "dist/css/",
                ext: ".min.css"
            }
        },
        csscomb: {
            files: {
                "dist/css/style.css": ["dist/css/style.css"]
            }
        },
        tinypng: {
            options: {
                apiKey: "7C4kC-mgJw4K0EjdYkjqAmtkOq7vyOHp",
                summarize: true,
                showProgress: true,
                stopOnImageError: false
            },
            compress: {
                expand: true,
                src: ["dist/img/*.png", "dist/img/*.jpg", "dist/img/*.jpeg"],
                files:{
                    dest: "dist/img"
                }
            },
        },
        watch: {
            options: {
                spawn: false,
                livereload: true
            },
            stylesheets: {
                files: ["src/scss/**/*.scss"],
                tasks: ["sass"]
            },
            scripts: {
                files: "src/**/*.js",
                tasks: ["jshint"]
            }
        },
        jshint: {
            options: {
                esversion: 6,
                reporter: require('jshint-stylish')
            },
            build: ['Gruntfile.js', 'src/js/main.js']
        },
        sass: {
            options: {
                // sourcemap: "auto",
                style: "expanded"
            },
            dev: {
                files: {
                    "dist/css/style.css": "src/scss/bootstrap.scss"
                }
            }
        },
        // Title not change and other options are not working
        notify_hooks: {
            dev: {
                options: {
                    enabled: true,
                    title: "<%= pkg.keywords %>"
                }
            },
            watch: {
                options: {
                    title: 'Task Complete',
                    message: 'Eceeeem',
                    sourceMap:true
                }
            },
            server: {
                options: {
                    message: 'Server is ready!'
                }
            }
        },
        
        svgmin: { 
            options: {
                plugins: [
                    { removeViewBox: false },
                    { removeUselessStrokeAndFill: false }
                ]
            },
            dist: {
                expand: true,
                cwd: 'dist/img',
                src: ['*.svg'],
                dest: 'dist/img',
                ext: '.svg'
            }
        },
        uglify: {
            
            my_target: {
                files: {
                  'dist/js/all.min.js': ['dist/js/all.js']
                }
              }
          },

          uncss: {
            dist: {
                files: {
                    'dist/css/style.css': ['index.php', 'about.html', 'products.html', 'product.html', 'article.html', 'contact.html', 'news.html']
                }
            }
        },

        purifycss: {
            options: {},
            target: {
              src: ['*.html', 'dist/js/all.min.js'],
              css: ['dist/css/style.css'],
              dest: 'dist/css/style.css'
            },
          },
        // It is not converting the icons
        // favicons: {
        //  options: {
        //      html: "dev/index.php",
        //      HTMLPrefix: "dist/img/"
        //  },
        //  icons: {
        //      src: "dev/dist/img/logo.png",
        //      dest: "dev/dist/img/"
        //  }
        // }
    });
    
    grunt.loadNpmTasks("grunt-autoprefixer");
    //grunt.loadNpmTasks("grunt-contrib-clean");
    //grunt.loadNpmTasks("grunt-contrib-compress");
    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-contrib-connect");
    //grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-jshint");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-csscomb");
    //grunt.loadNpmTasks("grunt-favicons");
    grunt.loadNpmTasks("grunt-notify");
    grunt.loadNpmTasks("grunt-tinypng");
    grunt.loadNpmTasks("grunt-svgmin");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-purifycss');
    
    grunt.registerTask("build-dev", ["sass", "jshint", "connect", "watch"]);
    //grunt.registerTask("build-prod", ["autoprefixer", "csscomb", "cssmin", "concat", "uglify", "purifycss", "tinypng", "svgmin"]);
    grunt.registerTask("build-prod", ["autoprefixer", "csscomb", "concat", "uglify", "purifycss", "cssmin", "tinypng", "svgmin"]);
};