/**
 * 
 * 
 * 
 * 
 * 
 */
var bruens = {
  //variables
  
  
  //methods
  init: function() {
    this.getCalendars();
  },
  
  /**
   * method to generate jquery Ui calendars.
   */
  getCalendars: function() {
    $('.boxCalendar').datepicker({
      dateFormat: 'dd-mm-yy',
      onSelect:   function(dateText, inst) {
        $(this).parent().find('.fldDate input').val(dateText);
      }
    });
  }
  
}


$(document).ready(function(){
  bruens.init();
});