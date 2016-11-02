module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: './',
          src: 'style.css',
          dest: './',
          ext:'.min.css'
        }]
      }
    },

    postcss: {
      options: {
        processors: [
        require('autoprefixer')({browsers: 'last 2 versions'})
        ]
      },
      dist: {
        src: './style.css',
        dest: './style.post.css'
      }
    }

  });

 grunt.loadNpmTasks('grunt-contrib-cssmin');
 grunt.loadNpmTasks('grunt-postcss');
};