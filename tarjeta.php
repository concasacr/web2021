<style> 
#my-node {
  color: #fff;
   background: url(http://concasa.com/tarjeta.png);
    background-size: contain;
    width: 100%;
    height: 100%;
    max-width: 230px;
    max-height: 142px;
}
span.card {
    display: block;
    padding-top: 78px;
    font-size: 18px;
    padding-left: 20px;
}
span.name {
    display: block;
    font-size: 11px;
    padding-left: 20px;
    padding-top: 2px;
}
span.date {
    display: block;
    font-size: 9px;
    padding-left: 20px;
}
@media print {
	* { margin: 0 !important; padding: 0 !important; }
    /* @page {size: A4 landscape; } */
	@page {
	    size: 8.5in 5.5in;
	    size: landscape;
     }
    /* use width if in portrait (use the smaller size to try 
       and prevent image from overflowing page... */
    img { width:100%; }	
}
</style> 

<div id="my-node">
  <span class="card">0000 0000 0000 00924</span>
  <span class="name">DANIEL F. CEDEÑO ROMERO</span>
  <span class="date">VENCE: 30 - 07 - 19</span>
</div>