$ -> 
	$.ajax 
		dataType: 'json'
		url: "http://teamtreehouse.com/dck.json"
		success: (data) ->
			$("#loader").remove()
			count = 0
			for d in data.badges
				do (d) ->
					count++
					if count <= 10
						$("ul.badges").append "<li class='left'><div class='tooltip'>#{d.name}</div><img src=#{d.icon_url}  /></li>"
					else if count > 10
						$("ul.badges").append "<li class='right'><div class='tooltip'>#{d.name}</div><img src=#{d.icon_url} /></li>"
						if count == 20
							count = 0