/*! DataTables UIkit 3 integration
 */

(function( factory ){
	if ( typeof define === 'function' && define.amd ) {
		// AMD
		define( ['jquery', 'datatables.net'], function ( $ ) {
			return factory( $, window, document );
		} );
	}
	else if ( typeof exports === 'object' ) {
		// CommonJS
		var jq = require('jquery');
		var cjsRequires = function (root, $) {
			if ( ! $.fn.dataTable ) {
				require('datatables.net')(root, $);
			}
		};

		if (typeof window === 'undefined') {
			module.exports = function (root, $) {
				if ( ! root ) {
					// CommonJS environments without a window global must pass a
					// root. This will give an error otherwise
					root = window;
				}

				if ( ! $ ) {
					$ = jq( root );
				}

				cjsRequires( root, $ );
				return factory( $, root, root.document );
			};
		}
		else {
			cjsRequires( window, jq );
			module.exports = factory( jq, window, window.document );
		}
	}
	else {
		// Browser
		factory( jQuery, window, document );
	}
}(function( $, window, document ) {
'use strict';
var DataTable = $.fn.dataTable;



/**
 * This is a tech preview of UIKit integration with DataTables.
 */

/* Set the defaults for DataTables initialisation */
$.extend( true, DataTable.defaults, {
	renderer: 'uikit'
} );


/* Default class modification */
$.extend( true, DataTable.ext.classes, {
	table: "dt-container uk-form dt-uikit",
	search: {
		input: "uk-form-small uk-input"
	},
	length: {
		select: "uk-form-small uk-select"
	},
	processing: {
		container: "dt-processing uk-panel"
	}
} );

DataTable.ext.renderer.pagingButton.uikit = function (settings, buttonType, content, active, disabled) {
	var btnClasses = [];

	if (active) {
		btnClasses.push('uk-active');
	}

	if (disabled) {
		btnClasses.push('uk-disabled')
	}

	var li = $('<li>').addClass(btnClasses.join(' '));
	var a = $(disabled ? '<span>' : '<a>', {
		'href': disabled ? null : '#'
	})
		.html(content)
		.appendTo(li);

	return {
		display: li,
		clicker: a
	};
};

DataTable.ext.renderer.pagingContainer.uikit = function (settings, buttonEls) {
	return $('<ul/>').addClass('uk-pagination uk-pagination-right uk-flex-right').append(buttonEls);
};

DataTable.ext.renderer.layout.uikit = function ( settings, container, items ) {
	var row = $( '<div/>', {
			"class": 'uk-flex uk-flex-between'
		} )
		.appendTo( container );

	DataTable.ext.renderer.layout._forLayoutRow(items, function (key, val) {
		var klass = '';
		if ( key === 'start' ) {
			klass += 'uk-text-left';
		}
		else if ( key === 'end' ) {
			klass += 'uk-text-right';
		}
		else if ( key === 'full' ) {
			if ( val.table ) {
				klass += 'uk-width-1-1';
			}
			else {
				klass += 'uk-text-center';
			}
		}

		$( '<div/>', {
				id: val.id || null,
				"class": klass+' '+(val.className || '')
			} )
			.append( val.contents )
			.appendTo( row );
	} );
};


return DataTable;
}));