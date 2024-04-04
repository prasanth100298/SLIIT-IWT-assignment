function initAutocomplete(){
  // Create the autocomplete object, restricting the search to geographical
  // location types.
      var autocomplete = new google.maps.places.Autocomplete(
             /** @type {!HTMLInputElement} */(document.getElementById('autocomplete_search')),
               {types: ['geocode']});
    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
      }
  function fillInAddress() {
  var place = autocomplete.getPlace();
  }
// refernce  : https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform


function calculate(){
var distance=3;
var vtype=document.getElementsByName(vehicleType).value;
var tType=document.getElementsByName(tripType).value;
var amount,Fare;

if(vtype==1){
  if(distane>=1)
   amount=30+(distance-1)*30;
  else if(distance<1)
   amount=30.00;
}else if(vtype==2){
  if(distane>=1)
   amount=35+(distance-1)*40;
  else if(distance<1)
   amount=35.00;
}else if(vtype==3){
  if(distane>=1)
   amount=45+(distance-1)*50;
  else if(distance<1)
   amount=45.00;
}else if(vtype==4){
  if(distane>=1)
   amount=50+(distance-1)*70;
  else if(distance<1)
   amount=50.00;
}else if(vtype==5){
  if(distane>=1)
   amount=60+(distance-1)*80;
  else if(distance<1)
   amount=60.00;
}else if(vtype==6){
  if(distane>=1)
   amount=60+(distance-1)*100;
  else if(distance<1)
   amount=60.00;
}else if(vtype==7){
  if(distane>=1)
   amount=70+(distance-1)*150;
  else if(distance<1)
   amount=70.00;
}else{
  amount=100.00;
}
if(tType==2){
  Fare=amount*2;
}else{
  Fare = amount;
}
document.getElementById("fare").value=Fare;
}
