
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),   
    cssmin: {
      options: {
        compatibility: 'ie8',
        keepSpecialComments: '*',
        advanced: false
      },
      css_min: {
        src: [
          'core/jplist.core.min.css',
          'css/jplist.checkbox-dropdown.min.css',
          'css/jplist.pagination-bundle.min.css',
          'css/jplist.textbox-filter.min.css',
          'css/jplist.filter-toggle-bundle.min.css',
          'css/jplist.radio-buttons-dropdown.min.css',
        ],
        dest: 'css/jplist.custom.min.css'
      }    
    },
    uglify: {
      options: {
        preserveComments: 'some'
      },
      js_min: {
        src: [
          'core/jplist.core.min.js',
          'js/jplist.checkbox-dropdown.min.js',
          'js/jplist.pagination-bundle.min.js',
          'js/jplist.textbox-filter.min.js',
          'js/jplist.sort-bundle.min.js',
          'js/jplist.filter-toggle-bundle.min.js',
          'js/jplist.filter-dropdown-bundle.min.js',
        ],
        dest: 'js/jplist.custom.min.js'
      }      
    }
  });
  
  require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });
  require('time-grunt')(grunt);
  
  grunt.registerTask('dist', ['cssmin:css_min','uglify:js_min']);


};