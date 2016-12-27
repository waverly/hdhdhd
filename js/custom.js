$(document).ready(function(){

   $( function() {
      //  draggable icons
       $( ".draggable" ).draggable();
       });

       $("span.draggable").each(function() {
              var numRandTop = Math.floor(Math.random()*10);
              var numRandLeft = Math.floor(Math.random()*90);
              console.log(numRandTop, numRandLeft);
              $(this).css({'margin-left': numRandLeft + "%"});
              $(this).css({'margin-top': numRandTop + "%"});
              //      setInterval(function()                {$(".box").clone().appendTo("body");}, 3000);
        });


        // instagram integration
        $.ajax({
          type: "GET",
          dataType: "jsonp",
          cache: false,
          url: "https://api.instagram.com/v1/users/186642903/media/recent?access_token=186642903.1677ed0.d81153c58d35412c874ea83ef26c03ed",
          success: function(data) {
            // Find img src of most recent post
            var new_url = data.data[0].images.standard_resolution.url;
            console.log(new_url);

          // jquery method
            // var container_div = $('.circle');
            // var img_src =   '<img src="' + new_url + '" alt="HD INSTAGARM">';
            // var img_src =   "<img src='" + new_url + "' alt='HD INSTAGARM'>";
            // console.log(img_src)
            // append new image tag to circle div
            // container_div.html(img_src);

          // vanilla JS
          var circleElement = document.querySelector('.circle');
          if (circleElement) {
            var img = document.createElement('img');
            img.src = new_url;
            img.alt = 'HD INSTAGRAM';
            img.id = 'instagrampic'
            circleElement.appendChild(img);
            var link = document.createElement('a');
            link.href = "www.instagram.com/_____hd";
            var handle = document.createTextNode("@_____hd");
            link.appendChild(handle);
            circleElement.appendChild(link);
            }
          }
        });

        // soundcloud integration
        SC.initialize({
          client_id: 'cda55419e14398c3fcb5a3d5bcaacc2c'
        });

        $.get( "http://api.soundcloud.com/tracks/247720178?client_id=cda55419e14398c3fcb5a3d5bcaacc2c", function( data ) {
        console.log(data);

        var titleWrap = $("<span></span>", {text: data.permalink});
        $(titleWrap).appendTo("#soundcloudText");

        var playbackWrap = $("<span></span>", {text: data.playback_count});
        $(playbackWrap).appendTo("#soundcloudText");

        });

      //
      //   function findSong() {
      //       get("http://api.soundcloud.com/resolve.json?url=" + url + "&" + clientId, function(a) {
      //           console.log(a);
      //       })
      //   }
      //
      // SC.initialize({
      //   client_id: clientId
      // });
      //
      // var clientId = "client_id=cda55419e14398c3fcb5a3d5bcaacc2c",
      // url = "https://soundcloud.com/wet/dont-wanna-be-your-girl-1";
      //
      //

  });
