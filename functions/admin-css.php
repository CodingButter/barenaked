<?php
add_action('admin_head', 'my_admin_styles');

function my_admin_styles()
{
  echo '<style>
    .color-radios li [value="primary"]{
        background-color: rgb(var(--primary));
    }
        
    .color-radios li [value="secondary"]{
        background-color: rgb(var(--secondary));
    }
    .color-radios li [value="accent"]{
        background-color: rgb(var(--accent));
    }
    .color-radios li [value="light"]{
        background-color: rgb(var(--light));
    }
    .color-radios li [value="white"]{
        background-color: white);
    }
    .color-radios li [value="transparent"]{
        background-color: transparent);
    }
    </style>';
}


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
  echo '<style>
		.wp-menu-separator {
				border-bottom: 2px solid #ffffff;
		}

		.wp-submenu hr {
		    border-top: none;
		    border-color: rgba(240,245,250,.7);
		}

    .backend-row .backend-column {
      border: 1px solid #515151;
    }

    .backend-row .backend-column::before {
        content: "Column";
        font-weight: bold;
        font-size: 1.2em;
    }

    .hidden {
      display: none;
    }
  </style>';
}
