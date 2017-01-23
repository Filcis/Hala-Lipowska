<?php

function hl_theme_color_display()
{
	?>
        
    	<input type="radio" name="hl_theme_color" value="1" <?php checked(1, get_option('hl_theme_color'), true); ?>/>
<label>motyw letni </label> <br>
       
        <input type="radio" name="hl_theme_color" value="2" <?php checked(2, get_option('hl_theme_color'), true); ?> />

 <label>motyw zimowy </label>
    <?php
}

function display_theme_panel_fields()
{
    //add_settings_section is used to display the section heading and description
	add_settings_section("section", "All Settings", null, "theme-options"); 
	//is used to display the HTML code of the fields.
	add_settings_field("hl_theme_color", "Kolor motywu", "hl_theme_color_display", "theme-options", "section");
    //is called to automate saving the values of the fields.
    register_setting("section", "hl_theme_color");
}

function hl_theme_settings_page(){   
    ?>
	    <div class="wrap">
	    <h1>Ustawienia</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function hl_add_theme_menu_item(){
    
	add_menu_page("Ustawienia szablonu", "Ustawienia szablonu", "manage_options", "theme-panel", "hl_theme_settings_page", null, 1);
}

add_action("admin_menu", "hl_add_theme_menu_item");

add_action("admin_init", "display_theme_panel_fields");