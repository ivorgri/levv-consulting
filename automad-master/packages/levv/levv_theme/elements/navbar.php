<@ newPagelist { 
    type: 'children', 
    context: '/' 
} @>
<ul tabindex="0" class="">
    <# @{ checkboxShowInNavbar } #>
    <@ newPagelist { 
        excludeHidden: false, 
        match: '{ "checkboxShowInNavbar": "/[^0]+/" }' 
    } @>
    <@~ foreach in pagelist ~@>
        <li>
            <a href="@{ url }"><@ icon_title.php @></a>
        </li>
    <@~ end ~@>
</ul>