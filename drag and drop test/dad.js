var dragSrcEl = null;
 
/* Drag&Drop beginnt */
function handleDragStart(e) {
 
// Source ELemente
 dragSrcEl = this;
 
e.dataTransfer.effectAllowed = 'move';
 e.dataTransfer.setData('text/html', this.innerHTML);
}
 
function handleDragOver(e) {
 if (e.preventDefault) {
 e.preventDefault(); // Deaktiviert die Standardreaktion des Browsers. Dadurch wird das "Drop" möglich.
 }
 
e.dataTransfer.dropEffect = 'move'; // Drag & Drop mit Verschiebung
 /*
 Mögliche Werte:
 copy: A copy of the source item is made at the new location.
 move: An item is moved to a new location.
 link: A link is established to the source at the new location.
 none: The item may not be dropped.
 */
 
return false;
}
 
/* Verschieben beginnen */
function handleDragEnter(e) {
 // gestrichelte Umrandung des Elements hinzufügen
 this.classList.add('over');
}
 
/* Verschiebung aufhören */
function handleDragLeave(e) {
 // gestrichelte Umrandung des Elements aufheben
 this.classList.remove('over');
}
 
/* Maus auf Ziel losgelassen */
function handleDrop(e) {
 
 // Stopppt die Standardfunktionalität des Browsers, notwendig für Firefox
 if (e.preventDefault) {
 e.preventDefault();
 }
 
if (dragSrcEl != this) {
 // Bilder austauschen
 dragSrcEl.innerHTML = this.innerHTML;
 this.innerHTML = e.dataTransfer.getData('text/html');
 }
 
return false;
}
 
// wird am Ende aufgerufen
function handleDragEnd(e) {
 
 // Umrandung entfernen
 [].forEach.call(cols, function (col) {
 col.classList.remove('over');
 });
}
 
// Füge zu jedem Bild alle DnD Events hinzu. 
var images = document.querySelectorAll('#images .image');
[].forEach.call(images, function(image) {
 image.addEventListener('dragstart', handleDragStart, false);
 image.addEventListener('dragenter', handleDragEnter, false)
 image.addEventListener('dragover', handleDragOver, false);
 image.addEventListener('dragleave', handleDragLeave, false);
 image.addEventListener('drop', handleDrop, false);
 image.addEventListener('dragend', handleDragEnd, false);
});