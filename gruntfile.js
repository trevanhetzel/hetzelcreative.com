module.exports = function (grunt) {

    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Sass
         */
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['*.scss'],
                    dest: 'css',
                    ext: '.css'
                }]
            }
        },

        /**
         * Autoprefixer
         */
        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'ie 8', 'ie 9']
            },
            multiple_files: {
                expand: true,
                flatten: true,
                src: 'css/*.css',
                dest: 'css/'
            }
        },

        /**
         * Minify JS files
         */
        uglify: {
            my_target: {
                files: {
                    'js/app.js': [
                        'node_modules/jquery/dist/cdn/jquery-2.1.1.min.js',
                        'js/src/webfontloader.js',
                        'js/src/picturefill.min.js',
                        'node_modules/barekits/js/barekit.min.js',
                        'js/src/app.js'
                    ]
                }
            }
        },

        /**
         * Extract critical CSS
         */
        criticalcss: {
            custom_options: {
                options: {
                    url: "index.html",
                    width: 1200,
                    height: 900,
                    outputfile: "css/critical.css",
                    filename: "css/style.css",
                    buffer: 800*1024
                }
            }
        },

        /**
         * Minify critical CSS
         */
        cssmin: {
            critical: {
                files: [{
                    expand: true,
                    cwd: 'css/',
                    src: ['critical.css', '!critical.min.css'],
                    dest: 'css/',
                    ext: '.min.css'
                }]
            }
        },

        /**
         * Watch
         */
        watch: {
            css: {
                files: [
                    'css/**/*.scss'
                ],
                tasks: ['sass:dist', 'autoprefixer'],
                options: { nospawn: true }
            }
        }
    });

    // Load NPM Tasks
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-criticalcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Register Tasks
    grunt.registerTask('default', [ 'sass', 'autoprefixer', 'uglify' ]);
    grunt.registerTask('critical', [ 'criticalcss', 'cssmin' ]);

};