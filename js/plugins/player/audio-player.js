$(function() {
    "use strict";
    if ($('.audio-player').length) {
		var myPlayListOtion = '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';
		
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [
        //     {
        //         image : '../images/weekly/song3.jpg',	
        //         title: "Cyber Sonnet",
        //         artist: "You Am I",
        //         mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
        //         oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg",
        //         option : myPlayListOtion
        // }
    ], {
            swfPath: "js/plugins",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
            playlistOptions: {
                autoPlay: true
            }
        });
        for(let i=0;i<$("#songContainer").children("div").length;i++){
            $(`#song${i}`).click(()=>{
                let url,image_url,artist,titles,id,mp3s
                id = $(`#song${i}`).find(`#songid${i}`).text().trim();
               image_url= $(`#song${i}`).find(`#image${i}`).attr('src');
               titles=$(`#song${i}`).find(`#title${i}`).text().trim();
               artist=$(`#song${i}`).find(`#artist${i}`).text().trim();
               mp3s=$(`#song${i}`).find(`#mp3${i}`).text().trim();
            //    $("#songContainers").children("div").removeClass("ms_active_play")
            //    $(`#songContainers`).find(".ms_play_icon").children("img").css("display","block")
            //    $(`#songContainers`).find(".ms_play_icon").children("div").css("display","none")
             
              
              
               
               
            //     $("#songContainer").children("div").removeClass("ms_active_play")
            //     $(`#songContainer`).find(".ms_play_icon").children("img").css("display","block")
            //     $(`#songContainer`).find(".ms_play_icon").children("div").css("display","none")
              
               
               
            //     $(`#song${i}`).addClass("ms_weekly_box ms_active_play");
            //     $(`#song${i}`).find(".ms_play_icon").children("img").css("display","none")
            //     $(`#song${i}`).find(".ms_play_icon").children("div").css("display","block")
            //     .children(".ms_bars").css("display","show")
            //     $(`#song${i}`).find(`#play_icon${i}`).hide();
            //     $(`#song${i}`).find(`#play_show${i}`).show();
               

               myPlaylist.add({
                        image : image_url,
                    title: titles,
                    artist: artist,
                    mp3: mp3s,
                   
                	option : myPlayListOtion
                    })
                    myPlaylist.play(i); 
            })

        }
        // $("#song1").click(()=>{
        //     myPlaylist.add({
        //         image : url	
        //     title: "Cro Magnon Man",
        //     artist: "Mushroom Records",
        //     mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
           
		// 	option : myPlayListOtion
        //     })
        //     myPlaylist.play();
        //     var myPlaylist = new jPlayerPlaylist({
        //         jPlayer: "#jquery_jplayer_1",
        //         cssSelectorAncestor: "#jp_container_1"
        //     }, [
        //     //     {
        //     // 	image : 'images/weekly/song1.jpg',	
        //     //     title: "Cro Magnon Man",
        //     //     artist: "Mushroom Records",
        //     //     mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
        //     //     oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
        //     // 	option : myPlayListOtion
        //     // }
        // ], {
        //         swfPath: "js/plugins",
        //         supplied: "oga, mp3",
        //         wmode: "window",
        //         useStateClassSkin: true,
        //         autoBlur: false,
        //         smoothPlayBar: true,
        //         keyEnabled: true,
        //         playlistOptions: {
        //             autoPlay: true
        //         }
        //     });
           // console.log(myPlaylist)
       // })
        $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function(event) {
            var current = myPlaylist.current;
            var playlist = myPlaylist.playlist;
            $.each(playlist, function(index, obj) {
                if (index == current) {
                    $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img src='"+obj.image+"'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
                }
            });
			$('.knob-wrapper').mousedown(function() {
                $(window).mousemove(function(e) {
                    var angle1 = getRotationDegrees($('.knob')),
					volume = angle1 / 270 					
					
                    if (volume > 1) {
                        $("#jquery_jplayer_1").jPlayer("volume", 1);
                    } else if (volume <= 0) {
                        $("#jquery_jplayer_1").jPlayer("mute");
                    } else {
                        $("#jquery_jplayer_1").jPlayer("volume", volume);
                        $("#jquery_jplayer_1").jPlayer("unmute");
                    }
                });
				
                return false;
            }).mouseup(function() {
                $(window).unbind("mousemove");
            });
			
			
			function getRotationDegrees(obj) {
				var matrix = obj.css("-webkit-transform") ||
				obj.css("-moz-transform")    ||
				obj.css("-ms-transform")     ||
				obj.css("-o-transform")      ||
				obj.css("transform");
				if(matrix !== 'none') {
					var values = matrix.split('(')[1].split(')')[0].split(',');
					var a = values[0];
					var b = values[1];
					var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
				} else { var angle = 0; }
				return (angle < 0) ? angle + 360 : angle;
			}

			
			
			
			
            var timeDrag = false;
            $('.jp-play-bar').mousedown(function(e) {
                timeDrag = true;
                updatebar(e.pageX);
				
            });
            $(document).mouseup(function(e) {
                if (timeDrag) {
                    timeDrag = false;
                    updatebar(e.pageX);
                }
            });
            $(document).mousemove(function(e) {
                if (timeDrag) {
                    updatebar(e.pageX);
                }
            });
            var updatebar = function(x) {
                var progress = $('.jp-progress');
                var position = x - progress.offset().left;
                var percentage = 100 * position / progress.width();
                if (percentage > 100) {
                    percentage = 100;
                }
                if (percentage < 0) {
                    percentage = 0;
                }
                $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                $('.jp-play-bar').css('width', percentage + '%');
            };
            $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click', function() {
                $('#playlist-wrap').fadeToggle();
                $('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');
            });
            $('.hide_player').unbind().on('click', function() {
                $('.audio-player').toggleClass('is_hidden');
                $(this).html($(this).html() == '<i class="fa fa-angle-down"></i> HIDE' ? '<i class="fa fa-angle-up"></i> SHOW PLAYER' : '<i class="fa fa-angle-down"></i> HIDE');
            });
            $('body').unbind().on('click', '.audio-play-btn', function() {
                $('.audio-play-btn').removeClass('is_playing');
                $(this).addClass('is_playing');
                var playlistId = $(this).data('playlist-id');
                myPlaylist.play(playlistId);
            });
			
        });
    }
});