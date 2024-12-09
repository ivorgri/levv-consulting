<div class="levv-border-element">
  <div class="stroke-levv-klei group-hover:stroke-levv-klei group-focus:stroke-levv-klei" style="display:none"></div>
  <div class="stroke-levv-dieppaars group-hover:stroke-levv-dieppaars group-focus:stroke-levv-dieppaars" style="display:none"></div>
  <div class="stroke-levv-korenblauw group-hover:stroke-levv-korenblauw group-focus:stroke-levv-korenblauw" style="display:none"></div>
  <div class="stroke-levv-wijnrood group-hover:stroke-levv-wijnrood group-focus:stroke-levv-wijnrood" style="display:none"></div>
  <div class="stroke-levv-turqouise group-hover:stroke-levv-turqouise group-focus:stroke-levv-turqouise" style="display:none"></div>
  <div class="stroke-levv-heide group-hover:stroke-levv-heide group-focus:stroke-levv-heide" style="display:none"></div>
  <div class="tl-corner">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 50 100 A 50 50, 0, 0, 1, 100 50" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="tl-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="tc-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 25" fill="transparent" stroke-width="@{ :element_border_with }"/>
      <path d="M 25 50 h 50" fill="transparent" stroke="transparent" stroke-width="@{ :element_border_with }"/>
      <path d="M 75 50 h 25" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="tr-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="tr-corner">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 50 v 50" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="ml-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 50 0 V 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="mc-content 
  <@ if @{ :element_text_color_hover }@>group-hover:text-@{ :element_text_color_hover } group-focus:text-@{ :element_text_color_hover }<@ end @>
  <@ if @{ :element_content_padding }@>p-@{ :element_content_padding }<@ end @>
  <@ if @{ :element_text_color }@>text-@{ :element_text_color }<@ end @>
  ">
  <@ if @{ :element_contains_js } @>
    {{ levvBorderElement.title }}
  <@ else @>
    @{ :element_title }
    <@ end @>
  </div>
  <div class="mr-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }"
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 50 0 V 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>    
  </div>
  <div class="bl-corner">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 50 0 v 50 h 50" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="bl-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="bc-line">
  <@ if @{ :element_subtitle } @>
    @{ :element_subtitle }
  <@ else @>
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  <@ end @>
  </div>
  <div class="br-line">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0 50 h 100" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
  <div class="br-corner">
    <svg class="stroke-@{ :element_border_color } group-hover:stroke-@{ :element_border_color_hover } group-focus:stroke-@{ :element_border_color_hover }" 
    <@ if @{ :element_contains_js } @>
      :class="levvBorderElement.value === store.selectedLevvBorderElement ? 'stroke-@{ :element_text_color_active }' : 'stroke-@{ :element_border_color }'"
    <@ end @>
    width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 50 0 A 50 50, 0, 0, 1, 0 50" fill="transparent" stroke-width="@{ :element_border_with }"/>
    </svg>
  </div>
</div>