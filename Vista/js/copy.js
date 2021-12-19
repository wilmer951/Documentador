/*=============================================
COPIAR A PORTAPAPLES
=============================================*/


function CopyToClipboard(text) {

  

    
      var copyTextarea = document.querySelector('#'+text+'');
      
      copyTextarea.select();


      
    
      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
      } catch (err) {
        console.log('Oops, unable to copy');
      }
    };




/*=================================================================================================================== ======*/




