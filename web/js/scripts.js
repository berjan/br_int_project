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
   * This function expects a structure like:
   * <div>
   *  <div class="boxCalendar"></div>
   *  <div class="fldDate">
   *    <input type="text" name="x" id="y" />
   *  </div>
   * </div>
   */
  getCalendars: function() {
    $('.boxCalendar').datepicker({
<<<<<<< HEAD
      dateFormat: 'dd-mm-yy', // format 23-11-2011
      onSelect:   function(dateText, inst) { //when a date is selected, populate the date-field
        $(this).parent().find('.fldDate input').val(dateText);
=======
      dateFormat: 'dd-mm-yy',
      onSelect:   function(dateText, inst) {
        $('.fsNieuw').find('.fldDate input').val(dateText);
        //Write some specific test jquery...maybe move it to a specific bundle
        
>>>>>>> -made time entries functional
      }
    });
  }
  
}

// When the dom is ready, 
// fire the bruens initializer!
$(document).ready(function(){
  bruens.init();
});