module.exports = function (grunt) {
    'use strict';
    require('load-grunt-tasks')(grunt);
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jshint: {},
        compass: {
            sass: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    outputStyle: 'nested'
                }
            }
        },
        watch: {
            sass: {
                files: '**/*.scss',
                tasks: ['compass'],
                options: {
                    livereload: true
                }
            },
            bower: {
                files: 'bower_components/**/*.js',
                tasks: ['wiredep'],
                options: {
                    livereload: true
                }
            }
        },
        wiredep: {
            task: {
                src: [
                    'helloworld.info',
                    'scss/_vendor.scss'
                ],
                options: {
                    fileTypes: {
                        info: {
                            block: /(([ \t]*);\s*bower:*(\S*))(\n|\r|.)*?(;\s*endbower)/gi,
                            detect: {
                                js: /scripts\[\] = \s(.+js)/gi,
                                css: /stylesheets\[all\]\[\] = \s(.+css)/gi
                            },
                            replace: {
                                js: 'scripts[] = {{filePath}}',
                                css: 'stylesheets[all][] = {{filePath}}'
                            }
                        },
                        scss: {
                            block: /(([ \t]*)\/\/\s*bower:*(\S*))(\n|\r|.)*?(\/\/\s*endbower)/gi,
                            detect: {
                                css: /@import\s['"](.+css)['"]/gi,
                                sass: /@import\s['"](.+sass)['"]/gi,
                                scss: /@import\s['"](.+scss)['"]/gi
                            },
                            replace: {
                                css: '@import "{{filePath}}";',
                                sass: '@import "{{filePath}}";',
                                scss: '@import "{{filePath}}";'
                            }
                        }
                    }
                }
            }
        },
    });
    grunt.registerTask('default', ['wiredep', 'compass']);
};