$(document).ready(function() {
  $('.modal-trigger').leanModal();
});
 var options1 = [
   
    {selector: '#abt', offset: 50, callback: "Materialize.toast('<span class=\"center wow delay-02s animated flash \"  data-wow-delay=\"2000ms\"> This is about me!!!</span>', 1500, \"rounded\" )" }
     ];
     var options2 = [
    {selector: '#skills', offset: 205, callback: "Materialize.toast('<span class=\"center wow delay-02s animated flash \"  data-wow-delay=\"2000ms\"> Please tab all options!!!</span>', 1500, \"rounded\" )" } ];
     var options3 = [
    {selector: '#edu', offset: 240, callback: "Materialize.toast('<span class=\"center wow delay-02s animated flash \"  data-wow-delay=\"2000ms\"> These are my qualification in books</span>', 1500, \"rounded\" )" } ];
     var options4 = [
    {selector: '#str', offset: 300, callback: "Materialize.toast('<span class=\"center wow delay-02s animated flash \"  data-wow-delay=\"2000ms\"> My Strengths</span>', 1500, \"rounded\" )" }
  ];
  var options5 = [
    {selector: '#portfolio', offset: 220, callback: "Materialize.toast('<span class=\"center wow delay-02s animated flash \"  data-wow-delay=\"2000ms\"> My Achievements</span>', 1500, \"rounded\" )" }
  ];
  Materialize.scrollFire(options1);
  Materialize.scrollFire(options2);
  Materialize.scrollFire(options3);
  Materialize.scrollFire(options4);
  Materialize.scrollFire(options5);
  