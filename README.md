# genesis_add_menu
#Adding a third menu on genesis sample theme.
___  

I have this project that I have been working on and I need to add a menu which must be floating on the left of the header.   
So, I went over google and found two approaches.   

1. One, is from [Amethyst Website Design](https://amethystwebsitedesign.com/add-third-footer-navigation-menu-to-genesis-child-theme/).  
2. Is from my idol and hero, [Sridhar Katakam](https://sridharkatakam.com/custom-navigation-theme-location-in-genesis/).  

(In the spirit of transparency, I got most of the code from their tutorials. Big ups and big thanks!)  

However, I can't make them echo out on my website. Since Sridhar's tutorial was from genesis 2.6.0 (if I'm not mistaken).
So, I made an approach on the first portion/section of the code at the genesis_add_menu.php file.

UPDATE: Sridhar's tutorial on this just got updated. I think his has better approach. Check it [here](https://sridharkatakam.com/custom-navigation-theme-location-in-genesis/).


##Approach:  
___  

1. Register your custom nav menu.
2. Echo out the menu and put it wherever you wish using action hook.
3. Combine the main and the custom menu for responsive design (for smaller screen size).
4. Add styling using CSS.

Items 1 and 2 are found on the genesis_add_menu.php and should go to functions.php.
Item 3 should go to responsive-menu.php (found on: config/responsive-menus.php).  
Item 4 should go to style.css.

If there are erroneous code, source or whatnot, please comment to help me out.
Thank you!
