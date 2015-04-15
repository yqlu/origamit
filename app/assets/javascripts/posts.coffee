# Place all the behaviors and hooks related to the matching controller here.
# All this logic will automatically be available in application.js.
# You can use CoffeeScript in this file: http://coffeescript.org/

jQuery ->
	$('#draggablePanelList').sortable(
		axis: 'y'
		items: '.item'
		cursor: 'move'
		sort: (e, ui) ->
			ui.item.addClass('active-item-shadow')
		stop: (e, ui) ->
			ui.item.removeClass('active-item-shadow')
			# highlight the row on drop to indicate an update
			ui.item.children('td').effect('highlight', {}, 1000)
		update: (e, ui) ->
			item_id = ui.item.data('item-id')
			position = ui.item.index() # this will not work with paginated items, as the index is zero on every page
			$.ajax(
				type: 'POST'
				url: '/posts/update_row_order'
				dataType: 'json'
				data: { post: {post_id: item_id, row_order_position: position } }
			)
	)