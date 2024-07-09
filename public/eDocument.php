<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*
        ! tailwindcss v3.3.1 | MIT License | https://tailwindcss.com
        */

        /*
        1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
        2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
        */

        *,
        ::before,
        ::after {
        box-sizing: border-box;
        /* 1 */
        border-width: 0;
        /* 2 */
        border-style: solid;
        /* 2 */
        border-color: #E5E7EB;
        /* 2 */
        }

        ::before,
        ::after {
        --tw-content: '';
        }

        /*
        1. Use a consistent sensible line-height in all browsers.
        2. Prevent adjustments of font size after orientation changes in iOS.
        3. Use a more readable tab size.
        4. Use the user's configured `sans` font-family by default.
        5. Use the user's configured `sans` font-feature-settings by default.
        6. Use the user's configured `sans` font-variation-settings by default.
        */

        html {
        line-height: 1.5;
        /* 1 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
        -moz-tab-size: 4;
        /* 3 */
        -o-tab-size: 4;
            tab-size: 4;
        /* 3 */
        font-family: Poppins, sans-serif;
        /* 4 */
        font-feature-settings: normal;
        /* 5 */
        font-variation-settings: normal;
        /* 6 */
        }

        /*
        1. Remove the margin in all browsers.
        2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
        */

        body {
        margin: 0;
        /* 1 */
        line-height: inherit;
        /* 2 */
        }

        /*
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        3. Ensure horizontal rules are visible by default.
        */

        hr {
        height: 0;
        /* 1 */
        color: inherit;
        /* 2 */
        border-top-width: 1px;
        /* 3 */
        }

        /*
        Add the correct text decoration in Chrome, Edge, and Safari.
        */

        abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
        }

        /*
        Remove the default font size and weight for headings.
        */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-size: inherit;
        font-weight: inherit;
        }

        /*
        Reset links to optimize for opt-in styling instead of opt-out.
        */

        a {
        color: inherit;
        text-decoration: inherit;
        }

        /*
        Add the correct font weight in Edge and Safari.
        */

        b,
        strong {
        font-weight: bolder;
        }

        /*
        1. Use the user's configured `mono` font family by default.
        2. Correct the odd `em` font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        /* 1 */
        font-size: 1em;
        /* 2 */
        }

        /*
        Add the correct font size in all browsers.
        */

        small {
        font-size: 80%;
        }

        /*
        Prevent `sub` and `sup` elements from affecting the line height in all browsers.
        */

        sub,
        sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
        }

        sub {
        bottom: -0.25em;
        }

        sup {
        top: -0.5em;
        }

        /*
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        3. Remove gaps between table borders by default.
        */

        table {
        text-indent: 0;
        /* 1 */
        border-color: inherit;
        /* 2 */
        border-collapse: collapse;
        /* 3 */
        }

        /*
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        3. Remove default padding in all browsers.
        */

        button,
        input,
        optgroup,
        select,
        textarea {
        font-family: inherit;
        /* 1 */
        font-size: 100%;
        /* 1 */
        font-weight: inherit;
        /* 1 */
        line-height: inherit;
        /* 1 */
        color: inherit;
        /* 1 */
        margin: 0;
        /* 2 */
        padding: 0;
        /* 3 */
        }

        /*
        Remove the inheritance of text transform in Edge and Firefox.
        */

        button,
        select {
        text-transform: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Remove default button styles.
        */

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
        -webkit-appearance: button;
        /* 1 */
        background-color: transparent;
        /* 2 */
        background-image: none;
        /* 2 */
        }

        /*
        Use the modern Firefox focus style for all focusable elements.
        */

        :-moz-focusring {
        outline: auto;
        }

        /*
        Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
        */

        :-moz-ui-invalid {
        box-shadow: none;
        }

        /*
        Add the correct vertical alignment in Chrome and Firefox.
        */

        progress {
        vertical-align: baseline;
        }

        /*
        Correct the cursor style of increment and decrement buttons in Safari.
        */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
        height: auto;
        }

        /*
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */

        [type='search'] {
        -webkit-appearance: textfield;
        /* 1 */
        outline-offset: -2px;
        /* 2 */
        }

        /*
        Remove the inner padding in Chrome and Safari on macOS.
        */

        ::-webkit-search-decoration {
        -webkit-appearance: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to `inherit` in Safari.
        */

        ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
        }

        /*
        Add the correct display in Chrome and Safari.
        */

        summary {
        display: list-item;
        }

        /*
        Removes the default spacing and border for appropriate elements.
        */

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
        margin: 0;
        }

        fieldset {
        margin: 0;
        padding: 0;
        }

        legend {
        padding: 0;
        }

        ol,
        ul,
        menu {
        list-style: none;
        margin: 0;
        padding: 0;
        }

        /*
        Prevent resizing textareas horizontally by default.
        */

        textarea {
        resize: vertical;
        }

        /*
        1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
        2. Set the default placeholder color to the user's configured gray 400 color.
        */

        input::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1;
        /* 1 */
        color: #9CA3AF;
        /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
        opacity: 1;
        /* 1 */
        color: #9CA3AF;
        /* 2 */
        }

        /*
        Set the default cursor for buttons.
        */

        button,
        [role="button"] {
        cursor: pointer;
        }

        /*
        Make sure disabled buttons don't get the pointer cursor.
        */

        :disabled {
        cursor: default;
        }

        /*
        1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
        2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
        This can trigger a poorly considered lint error in some tools but is included by design.
        */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
        display: block;
        /* 1 */
        vertical-align: middle;
        /* 2 */
        }

        /*
        Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
        */

        img,
        video {
        max-width: 100%;
        height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */

        [hidden] {
        display: none;
        }

        [type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none;
        background-color: #fff;
        border-color: #6B7280;
        border-width: 1px;
        border-radius: 0px;
        padding-top: 0.5rem;
        padding-right: 0.75rem;
        padding-bottom: 0.5rem;
        padding-left: 0.75rem;
        font-size: 1rem;
        line-height: 1.5rem;
        --tw-shadow: 0 0 #0000;
        }

        [type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #1C64F2;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
        border-color: #1C64F2;
        }

        input::-moz-placeholder, textarea::-moz-placeholder {
        color: #6B7280;
        opacity: 1;
        }

        input::placeholder,textarea::placeholder {
        color: #6B7280;
        opacity: 1;
        }

        ::-webkit-datetime-edit-fields-wrapper {
        padding: 0;
        }

        ::-webkit-date-and-time-value {
        min-height: 1.5em;
        }

        select:not([size]) {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236B7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
        }

        [multiple] {
        background-image: initial;
        background-position: initial;
        background-repeat: unset;
        background-size: initial;
        padding-right: 0.75rem;
        -webkit-print-color-adjust: unset;
                print-color-adjust: unset;
        }

        [type='checkbox'],[type='radio'] {
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none;
        padding: 0;
        -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
            -moz-user-select: none;
                user-select: none;
        flex-shrink: 0;
        height: 1rem;
        width: 1rem;
        color: #1C64F2;
        background-color: #fff;
        border-color: #6B7280;
        border-width: 1px;
        --tw-shadow: 0 0 #0000;
        }

        [type='checkbox'] {
        border-radius: 0px;
        }

        [type='radio'] {
        border-radius: 100%;
        }

        [type='checkbox']:focus,[type='radio']:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
        --tw-ring-offset-width: 2px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #1C64F2;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
        }

        [type='checkbox']:checked,[type='radio']:checked,.dark [type='checkbox']:checked,.dark [type='radio']:checked {
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        }

        [type='checkbox']:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
        }

        [type='radio']:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
        }

        [type='checkbox']:indeterminate {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        }

        [type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
        border-color: transparent;
        background-color: currentColor;
        }

        [type='file'] {
        background: unset;
        border-color: inherit;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-size: unset;
        line-height: inherit;
        }

        [type='file']:focus {
        outline: 1px auto inherit;
        }

        input[type=file]::file-selector-button {
        color: white;
        background: #1F2937;
        border: 0;
        font-weight: 500;
        font-size: 0.875rem;
        cursor: pointer;
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
        padding-left: 2rem;
        padding-right: 1rem;
        -webkit-margin-start: -1rem;
                margin-inline-start: -1rem;
        -webkit-margin-end: 1rem;
                margin-inline-end: 1rem;
        }

        input[type=file]::file-selector-button:hover {
        background: #374151;
        }

        .dark input[type=file]::file-selector-button {
        color: white;
        background: #4B5563;
        }

        .dark input[type=file]::file-selector-button:hover {
        background: #6B7280;
        }

        input[type="range"]::-webkit-slider-thumb {
        height: 1.25rem;
        width: 1.25rem;
        background: #1C64F2;
        border-radius: 9999px;
        border: 0;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        }

        input[type="range"]:disabled::-webkit-slider-thumb {
        background: #9CA3AF;
        }

        .dark input[type="range"]:disabled::-webkit-slider-thumb {
        background: #6B7280;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        --tw-ring-opacity: 1px;
        --tw-ring-color: rgb(164 202 254 / var(--tw-ring-opacity));
        }

        input[type="range"]::-moz-range-thumb {
        height: 1.25rem;
        width: 1.25rem;
        background: #1C64F2;
        border-radius: 9999px;
        border: 0;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        }

        input[type="range"]:disabled::-moz-range-thumb {
        background: #9CA3AF;
        }

        .dark input[type="range"]:disabled::-moz-range-thumb {
        background: #6B7280;
        }

        input[type="range"]::-moz-range-progress {
        background: #3F83F8;
        }

        input[type="range"]::-ms-fill-lower {
        background: #3F83F8;
        }

        .toggle-bg:after {
        content: "";
        position: absolute;
        top: 0.125rem;
        left: 0.125rem;
        background: white;
        border-color: #D1D5DB;
        border-width: 1px;
        border-radius: 9999px;
        height: 1.25rem;
        width: 1.25rem;
        transition-property: background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
        transition-duration: .15s;
        box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        }

        input:checked + .toggle-bg:after {
        transform: translateX(100%);;
        border-color: white;
        }

        input:checked + .toggle-bg {
        background: #1C64F2;
        border-color: #1C64F2;
        }

        .tooltip-arrow,.tooltip-arrow:before {
        position: absolute;
        width: 8px;
        height: 8px;
        background: inherit;
        }

        .tooltip-arrow {
        visibility: hidden;
        }

        .tooltip-arrow:before {
        content: "";
        visibility: visible;
        transform: rotate(45deg);
        }

        [data-tooltip-style^='light'] + .tooltip > .tooltip-arrow:before {
        border-style: solid;
        border-color: #e5e7eb;
        }

        [data-tooltip-style^='light'] + .tooltip[data-popper-placement^='top'] > .tooltip-arrow:before {
        border-bottom-width: 1px;
        border-right-width: 1px;
        }

        [data-tooltip-style^='light'] + .tooltip[data-popper-placement^='right'] > .tooltip-arrow:before {
        border-bottom-width: 1px;
        border-left-width: 1px;
        }

        [data-tooltip-style^='light'] + .tooltip[data-popper-placement^='bottom'] > .tooltip-arrow:before {
        border-top-width: 1px;
        border-left-width: 1px;
        }

        [data-tooltip-style^='light'] + .tooltip[data-popper-placement^='left'] > .tooltip-arrow:before {
        border-top-width: 1px;
        border-right-width: 1px;
        }

        .tooltip[data-popper-placement^='top'] > .tooltip-arrow {
        bottom: -4px;
        }

        .tooltip[data-popper-placement^='bottom'] > .tooltip-arrow {
        top: -4px;
        }

        .tooltip[data-popper-placement^='left'] > .tooltip-arrow {
        right: -4px;
        }

        .tooltip[data-popper-placement^='right'] > .tooltip-arrow {
        left: -4px;
        }

        .tooltip.invisible > .tooltip-arrow:before {
        visibility: hidden;
        }

        [data-popper-arrow],[data-popper-arrow]:before {
        position: absolute;
        width: 8px;
        height: 8px;
        background: inherit;
        }

        [data-popper-arrow] {
        visibility: hidden;
        }

        [data-popper-arrow]:before {
        content: "";
        visibility: visible;
        transform: rotate(45deg);
        }

        [data-popper-arrow]:after {
        content: "";
        visibility: visible;
        transform: rotate(45deg);
        position: absolute;
        width: 9px;
        height: 9px;
        background: inherit;
        }

        [role="tooltip"] > [data-popper-arrow]:before {
        border-style: solid;
        border-color: #e5e7eb;
        }

        .dark [role="tooltip"] > [data-popper-arrow]:before {
        border-style: solid;
        border-color: #4b5563;
        }

        [role="tooltip"] > [data-popper-arrow]:after {
        border-style: solid;
        border-color: #e5e7eb;
        }

        .dark [role="tooltip"] > [data-popper-arrow]:after {
        border-style: solid;
        border-color: #4b5563;
        }

        [data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow]:before {
        border-bottom-width: 1px;
        border-right-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow]:after {
        border-bottom-width: 1px;
        border-right-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow]:before {
        border-bottom-width: 1px;
        border-left-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow]:after {
        border-bottom-width: 1px;
        border-left-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow]:before {
        border-top-width: 1px;
        border-left-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow]:after {
        border-top-width: 1px;
        border-left-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow]:before {
        border-top-width: 1px;
        border-right-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow]:after {
        border-top-width: 1px;
        border-right-width: 1px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow] {
        bottom: -5px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow] {
        top: -5px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow] {
        right: -5px;
        }

        [data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow] {
        left: -5px;
        }

        [role="tooltip"].invisible > [data-popper-arrow]:before {
        visibility: hidden;
        }

        [role="tooltip"].invisible > [data-popper-arrow]:after {
        visibility: hidden;
        }

        *, ::before, ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(63 131 248 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }

        ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(63 131 248 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }

        *::-webkit-scrollbar {
        height: 0;
        width: 0;
        }

        *::-moz-selection {
        background: #262626;
        color: #ffffffff;
        }

        *::selection {
        background: #262626;
        color: #ffffffff;
        }

        .\!container {
        width: 100% !important;
        }

        .container {
        width: 100%;
        }

        @media (min-width: 640px) {
        .\!container {
            max-width: 640px !important;
        }

        .container {
            max-width: 640px;
        }
        }

        @media (min-width: 768px) {
        .\!container {
            max-width: 768px !important;
        }

        .container {
            max-width: 768px;
        }
        }

        @media (min-width: 1024px) {
        .\!container {
            max-width: 1024px !important;
        }

        .container {
            max-width: 1024px;
        }
        }

        @media (min-width: 1280px) {
        .\!container {
            max-width: 1280px !important;
        }

        .container {
            max-width: 1280px;
        }
        }

        @media (min-width: 1536px) {
        .\!container {
            max-width: 1536px !important;
        }

        .container {
            max-width: 1536px;
        }
        }

        .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
        }

        .not-sr-only {
        position: static;
        width: auto;
        height: auto;
        padding: 0;
        margin: 0;
        overflow: visible;
        clip: auto;
        white-space: normal;
        }

        .pointer-events-none {
        pointer-events: none;
        }

        .pointer-events-auto {
        pointer-events: auto;
        }

        .visible {
        visibility: visible;
        }

        .invisible {
        visibility: hidden;
        }

        .collapse {
        visibility: collapse;
        }

        .static {
        position: static;
        }

        .fixed {
        position: fixed;
        }

        .absolute {
        position: absolute;
        }

        .relative {
        position: relative;
        }

        .\!sticky {
        position: sticky !important;
        }

        .sticky {
        position: sticky;
        }

        .-inset-1 {
        inset: -0.25rem;
        }

        .inset-0 {
        inset: 0px;
        }

        .bottom-0 {
        bottom: 0px;
        }

        .bottom-6 {
        bottom: 1.5rem;
        }

        .bottom-\[60px\] {
        bottom: 60px;
        }

        .end-1 {
        inset-inline-end: 0.25rem;
        }

        .left-0 {
        left: 0px;
        }

        .left-1\/2 {
        left: 50%;
        }

        .right-0 {
        right: 0px;
        }

        .right-2 {
        right: 0.5rem;
        }

        .right-2\.5 {
        right: 0.625rem;
        }

        .right-6 {
        right: 1.5rem;
        }

        .top-0 {
        top: 0px;
        }

        .top-3 {
        top: 0.75rem;
        }

        .top-5 {
        top: 1.25rem;
        }

        .isolate {
        isolation: isolate;
        }

        .isolation-auto {
        isolation: auto;
        }

        .z-10 {
        z-index: 10;
        }

        .z-20 {
        z-index: 20;
        }

        .z-30 {
        z-index: 30;
        }

        .z-40 {
        z-index: 40;
        }

        .z-50 {
        z-index: 50;
        }

        .float-right {
        float: right;
        }

        .float-left {
        float: left;
        }

        .float-none {
        float: none;
        }

        .clear-left {
        clear: left;
        }

        .clear-right {
        clear: right;
        }

        .clear-both {
        clear: both;
        }

        .clear-none {
        clear: none;
        }

        .m-1 {
        margin: 0.25rem;
        }

        .m-2 {
        margin: 0.5rem;
        }

        .mx-auto {
        margin-left: auto;
        margin-right: auto;
        }

        .my-5 {
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        }

        .my-6 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        }

        .my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem;
        }

        .mb-1 {
        margin-bottom: 0.25rem;
        }

        .mb-10 {
        margin-bottom: 2.5rem;
        }

        .mb-2 {
        margin-bottom: 0.5rem;
        }

        .mb-28 {
        margin-bottom: 7rem;
        }

        .mb-3 {
        margin-bottom: 0.75rem;
        }

        .mb-4 {
        margin-bottom: 1rem;
        }

        .mb-5 {
        margin-bottom: 1.25rem;
        }

        .mb-6 {
        margin-bottom: 1.5rem;
        }

        .mb-8 {
        margin-bottom: 2rem;
        }

        .me-1 {
        -webkit-margin-end: 0.25rem;
                margin-inline-end: 0.25rem;
        }

        .me-2 {
        -webkit-margin-end: 0.5rem;
                margin-inline-end: 0.5rem;
        }

        .ml-auto {
        margin-left: auto;
        }

        .mr-2 {
        margin-right: 0.5rem;
        }

        .mr-3 {
        margin-right: 0.75rem;
        }

        .ms-2 {
        -webkit-margin-start: 0.5rem;
                margin-inline-start: 0.5rem;
        }

        .mt-10 {
        margin-top: 2.5rem;
        }

        .mt-2 {
        margin-top: 0.5rem;
        }

        .mt-4 {
        margin-top: 1rem;
        }

        .mt-5 {
        margin-top: 1.25rem;
        }

        .box-border {
        box-sizing: border-box;
        }

        .box-content {
        box-sizing: content-box;
        }

        .line-clamp-none {
        overflow: visible;
        display: block;
        -webkit-box-orient: horizontal;
        -webkit-line-clamp: none;
        }

        .block {
        display: block;
        }

        .inline-block {
        display: inline-block;
        }

        .inline {
        display: inline;
        }

        .flex {
        display: flex;
        }

        .inline-flex {
        display: inline-flex;
        }

        .table {
        display: table;
        }

        .inline-table {
        display: inline-table;
        }

        .table-caption {
        display: table-caption;
        }

        .table-cell {
        display: table-cell;
        }

        .table-column {
        display: table-column;
        }

        .table-column-group {
        display: table-column-group;
        }

        .table-footer-group {
        display: table-footer-group;
        }

        .table-header-group {
        display: table-header-group;
        }

        .table-row-group {
        display: table-row-group;
        }

        .table-row {
        display: table-row;
        }

        .flow-root {
        display: flow-root;
        }

        .grid {
        display: grid;
        }

        .inline-grid {
        display: inline-grid;
        }

        .contents {
        display: contents;
        }

        .list-item {
        display: list-item;
        }

        .\!hidden {
        display: none !important;
        }

        .hidden {
        display: none;
        }

        .h-1 {
        height: 0.25rem;
        }

        .h-1\/2 {
        height: 50%;
        }

        .h-10 {
        height: 2.5rem;
        }

        .h-16 {
        height: 4rem;
        }

        .h-20 {
        height: 5rem;
        }

        .h-4 {
        height: 1rem;
        }

        .h-5 {
        height: 1.25rem;
        }

        .h-6 {
        height: 1.5rem;
        }

        .h-8 {
        height: 2rem;
        }

        .h-full {
        height: 100%;
        }

        .h-px {
        height: 1px;
        }

        .max-h-full {
        max-height: 100%;
        }

        .min-h-\[calc\(100vh-4rem\)\] {
        min-height: calc(100vh - 4rem);
        }

        .w-1\/2 {
        width: 50%;
        }

        .w-10 {
        width: 2.5rem;
        }

        .w-16 {
        width: 4rem;
        }

        .w-20 {
        width: 5rem;
        }

        .w-4 {
        width: 1rem;
        }

        .w-4\/5 {
        width: 80%;
        }

        .w-5 {
        width: 1.25rem;
        }

        .w-6 {
        width: 1.5rem;
        }

        .w-60 {
        width: 15rem;
        }

        .w-64 {
        width: 16rem;
        }

        .w-72 {
        width: 18rem;
        }

        .w-8 {
        width: 2rem;
        }

        .w-9 {
        width: 2.25rem;
        }

        .w-full {
        width: 100%;
        }

        .min-w-0 {
        min-width: 0px;
        }

        .max-w-md {
        max-width: 28rem;
        }

        .max-w-screen-xl {
        max-width: 1280px;
        }

        .max-w-xs {
        max-width: 20rem;
        }

        .flex-1 {
        flex: 1 1 0%;
        }

        .flex-shrink {
        flex-shrink: 1;
        }

        .flex-shrink-0 {
        flex-shrink: 0;
        }

        .shrink {
        flex-shrink: 1;
        }

        .flex-grow {
        flex-grow: 1;
        }

        .grow {
        flex-grow: 1;
        }

        .basis-full {
        flex-basis: 100%;
        }

        .table-auto {
        table-layout: auto;
        }

        .table-fixed {
        table-layout: fixed;
        }

        .caption-top {
        caption-side: top;
        }

        .caption-bottom {
        caption-side: bottom;
        }

        .border-collapse {
        border-collapse: collapse;
        }

        .border-separate {
        border-collapse: separate;
        }

        .-translate-x-1\/2 {
        --tw-translate-x: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .-translate-x-full {
        --tw-translate-x: -100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .-translate-y-full {
        --tw-translate-y: -100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .translate-x-0 {
        --tw-translate-x: 0px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .translate-x-full {
        --tw-translate-x: 100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .translate-y-1\/4 {
        --tw-translate-y: 25%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .translate-y-full {
        --tw-translate-y: 100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .rotate-180 {
        --tw-rotate: 180deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .rotate-90 {
        --tw-rotate: 90deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .\!transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
        }

        .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .transform-cpu {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .transform-gpu {
        transform: translate3d(var(--tw-translate-x), var(--tw-translate-y), 0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .transform-none {
        transform: none;
        }

        @keyframes bouncing {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-15px);
        }
        }

        .animate-bouncing {
        animation: bouncing 2s ease infinite;
        }

        @keyframes slide_down {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(0%);
        }
        }

        .animate-slide_down1000 {
        animation: slide_down 1s;
        }

        @keyframes typing {
        0% {
            width: 0%;
            visibility: hidden;
        }

        100% {
            width: 100%;
        }
        }

        .animate-typing {
        animation: typing 2s alternate;
        }

        @keyframes wave {
        0% {
            transform: rotate(0.0deg);
        }

        10% {
            transform: rotate(14deg);
        }

        20% {
            transform: rotate(-8deg);
        }

        30% {
            transform: rotate(14deg);
        }

        40% {
            transform: rotate(-4deg);
        }

        50% {
            transform: rotate(10.0deg);
        }

        60% {
            transform: rotate(0.0deg);
        }

        100% {
            transform: rotate(0.0deg);
        }
        }

        .animate-wave {
        animation: wave 3s linear infinite;
        }

        .cursor-default {
        cursor: default;
        }

        .cursor-not-allowed {
        cursor: not-allowed;
        }

        .cursor-pointer {
        cursor: pointer;
        }

        .touch-auto {
        touch-action: auto;
        }

        .touch-none {
        touch-action: none;
        }

        .touch-pan-x {
        --tw-pan-x: pan-x;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pan-left {
        --tw-pan-x: pan-left;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pan-right {
        --tw-pan-x: pan-right;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pan-y {
        --tw-pan-y: pan-y;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pan-up {
        --tw-pan-y: pan-up;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pan-down {
        --tw-pan-y: pan-down;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-pinch-zoom {
        --tw-pinch-zoom: pinch-zoom;
        touch-action: var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom);
        }

        .touch-manipulation {
        touch-action: manipulation;
        }

        .select-none {
        -webkit-user-select: none;
            -moz-user-select: none;
                user-select: none;
        }

        .select-text {
        -webkit-user-select: text;
            -moz-user-select: text;
                user-select: text;
        }

        .select-all {
        -webkit-user-select: all;
            -moz-user-select: all;
                user-select: all;
        }

        .select-auto {
        -webkit-user-select: auto;
            -moz-user-select: auto;
                user-select: auto;
        }

        .resize-none {
        resize: none;
        }

        .resize-y {
        resize: vertical;
        }

        .resize-x {
        resize: horizontal;
        }

        .resize {
        resize: both;
        }

        .snap-none {
        scroll-snap-type: none;
        }

        .snap-x {
        scroll-snap-type: x var(--tw-scroll-snap-strictness);
        }

        .snap-y {
        scroll-snap-type: y var(--tw-scroll-snap-strictness);
        }

        .snap-both {
        scroll-snap-type: both var(--tw-scroll-snap-strictness);
        }

        .snap-mandatory {
        --tw-scroll-snap-strictness: mandatory;
        }

        .snap-proximity {
        --tw-scroll-snap-strictness: proximity;
        }

        .snap-start {
        scroll-snap-align: start;
        }

        .snap-end {
        scroll-snap-align: end;
        }

        .snap-center {
        scroll-snap-align: center;
        }

        .snap-align-none {
        scroll-snap-align: none;
        }

        .snap-normal {
        scroll-snap-stop: normal;
        }

        .snap-always {
        scroll-snap-stop: always;
        }

        .list-inside {
        list-style-position: inside;
        }

        .list-outside {
        list-style-position: outside;
        }

        .list-disc {
        list-style-type: disc;
        }

        .appearance-none {
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none;
        }

        .break-before-auto {
        -moz-column-break-before: auto;
            break-before: auto;
        }

        .break-before-avoid {
        -moz-column-break-before: avoid;
            break-before: avoid;
        }

        .break-before-all {
        -moz-column-break-before: all;
            break-before: all;
        }

        .break-before-avoid-page {
        -moz-column-break-before: avoid;
            break-before: avoid-page;
        }

        .break-before-page {
        -moz-column-break-before: page;
            break-before: page;
        }

        .break-before-left {
        -moz-column-break-before: left;
            break-before: left;
        }

        .break-before-right {
        -moz-column-break-before: right;
            break-before: right;
        }

        .break-before-column {
        -moz-column-break-before: column;
            break-before: column;
        }

        .break-inside-auto {
        -moz-column-break-inside: auto;
            break-inside: auto;
        }

        .break-inside-avoid {
        -moz-column-break-inside: avoid;
            break-inside: avoid;
        }

        .break-inside-avoid-page {
        break-inside: avoid-page;
        }

        .break-inside-avoid-column {
        -moz-column-break-inside: avoid;
            break-inside: avoid-column;
        }

        .break-after-auto {
        -moz-column-break-after: auto;
            break-after: auto;
        }

        .break-after-avoid {
        -moz-column-break-after: avoid;
            break-after: avoid;
        }

        .break-after-all {
        -moz-column-break-after: all;
            break-after: all;
        }

        .break-after-avoid-page {
        -moz-column-break-after: avoid;
            break-after: avoid-page;
        }

        .break-after-page {
        -moz-column-break-after: page;
            break-after: page;
        }

        .break-after-left {
        -moz-column-break-after: left;
            break-after: left;
        }

        .break-after-right {
        -moz-column-break-after: right;
            break-after: right;
        }

        .break-after-column {
        -moz-column-break-after: column;
            break-after: column;
        }

        .grid-flow-row {
        grid-auto-flow: row;
        }

        .grid-flow-col {
        grid-auto-flow: column;
        }

        .grid-flow-dense {
        grid-auto-flow: dense;
        }

        .grid-flow-row-dense {
        grid-auto-flow: row dense;
        }

        .grid-flow-col-dense {
        grid-auto-flow: column dense;
        }

        .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .grid-cols-7 {
        grid-template-columns: repeat(7, minmax(0, 1fr));
        }

        .flex-row {
        flex-direction: row;
        }

        .flex-row-reverse {
        flex-direction: row-reverse;
        }

        .flex-col {
        flex-direction: column;
        }

        .flex-col-reverse {
        flex-direction: column-reverse;
        }

        .flex-wrap {
        flex-wrap: wrap;
        }

        .flex-wrap-reverse {
        flex-wrap: wrap-reverse;
        }

        .flex-nowrap {
        flex-wrap: nowrap;
        }

        .place-content-center {
        place-content: center;
        }

        .place-content-start {
        place-content: start;
        }

        .place-content-end {
        place-content: end;
        }

        .place-content-between {
        place-content: space-between;
        }

        .place-content-around {
        place-content: space-around;
        }

        .place-content-evenly {
        place-content: space-evenly;
        }

        .place-content-baseline {
        place-content: baseline;
        }

        .place-content-stretch {
        place-content: stretch;
        }

        .place-items-start {
        place-items: start;
        }

        .place-items-end {
        place-items: end;
        }

        .place-items-center {
        place-items: center;
        }

        .place-items-baseline {
        place-items: baseline;
        }

        .place-items-stretch {
        place-items: stretch;
        }

        .content-normal {
        align-content: normal;
        }

        .content-center {
        align-content: center;
        }

        .content-start {
        align-content: flex-start;
        }

        .content-end {
        align-content: flex-end;
        }

        .content-between {
        align-content: space-between;
        }

        .content-around {
        align-content: space-around;
        }

        .content-evenly {
        align-content: space-evenly;
        }

        .content-baseline {
        align-content: baseline;
        }

        .content-stretch {
        align-content: stretch;
        }

        .items-start {
        align-items: flex-start;
        }

        .items-end {
        align-items: flex-end;
        }

        .items-center {
        align-items: center;
        }

        .items-baseline {
        align-items: baseline;
        }

        .items-stretch {
        align-items: stretch;
        }

        .justify-normal {
        justify-content: normal;
        }

        .justify-start {
        justify-content: flex-start;
        }

        .justify-end {
        justify-content: flex-end;
        }

        .justify-center {
        justify-content: center;
        }

        .justify-between {
        justify-content: space-between;
        }

        .justify-around {
        justify-content: space-around;
        }

        .justify-evenly {
        justify-content: space-evenly;
        }

        .justify-stretch {
        justify-content: stretch;
        }

        .justify-items-start {
        justify-items: start;
        }

        .justify-items-end {
        justify-items: end;
        }

        .justify-items-center {
        justify-items: center;
        }

        .justify-items-stretch {
        justify-items: stretch;
        }

        .gap-1 {
        gap: 0.25rem;
        }

        .gap-2 {
        gap: 0.5rem;
        }

        .gap-4 {
        gap: 1rem;
        }

        .gap-x-2 {
        -moz-column-gap: 0.5rem;
            column-gap: 0.5rem;
        }

        .space-x-2 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.5rem * var(--tw-space-x-reverse));
        margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-4 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1rem * var(--tw-space-x-reverse));
        margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-6 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1.5rem * var(--tw-space-x-reverse));
        margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-6 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
        }

        .space-y-reverse > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 1;
        }

        .space-x-reverse > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 1;
        }

        .divide-x > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-x-reverse: 0;
        border-right-width: calc(1px * var(--tw-divide-x-reverse));
        border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
        }

        .divide-y > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-y-reverse: 0;
        border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
        border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
        }

        .divide-y-reverse > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-y-reverse: 1;
        }

        .divide-x-reverse > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-x-reverse: 1;
        }

        .divide-solid > :not([hidden]) ~ :not([hidden]) {
        border-style: solid;
        }

        .divide-dashed > :not([hidden]) ~ :not([hidden]) {
        border-style: dashed;
        }

        .divide-dotted > :not([hidden]) ~ :not([hidden]) {
        border-style: dotted;
        }

        .divide-double > :not([hidden]) ~ :not([hidden]) {
        border-style: double;
        }

        .divide-none > :not([hidden]) ~ :not([hidden]) {
        border-style: none;
        }

        .divide-gray-200 > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(229 231 235 / var(--tw-divide-opacity));
        }

        .divide-neutral-200 > :not([hidden]) ~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(229 229 229 / var(--tw-divide-opacity));
        }

        .place-self-auto {
        place-self: auto;
        }

        .place-self-start {
        place-self: start;
        }

        .place-self-end {
        place-self: end;
        }

        .place-self-center {
        place-self: center;
        }

        .place-self-stretch {
        place-self: stretch;
        }

        .self-auto {
        align-self: auto;
        }

        .self-start {
        align-self: flex-start;
        }

        .self-end {
        align-self: flex-end;
        }

        .self-center {
        align-self: center;
        }

        .self-stretch {
        align-self: stretch;
        }

        .self-baseline {
        align-self: baseline;
        }

        .justify-self-auto {
        justify-self: auto;
        }

        .justify-self-start {
        justify-self: start;
        }

        .justify-self-end {
        justify-self: end;
        }

        .justify-self-center {
        justify-self: center;
        }

        .justify-self-stretch {
        justify-self: stretch;
        }

        .overflow-auto {
        overflow: auto;
        }

        .overflow-hidden {
        overflow: hidden;
        }

        .overflow-clip {
        overflow: clip;
        }

        .overflow-visible {
        overflow: visible;
        }

        .overflow-scroll {
        overflow: scroll;
        }

        .overflow-x-auto {
        overflow-x: auto;
        }

        .overflow-y-auto {
        overflow-y: auto;
        }

        .overflow-x-hidden {
        overflow-x: hidden;
        }

        .overflow-y-hidden {
        overflow-y: hidden;
        }

        .overflow-x-clip {
        overflow-x: clip;
        }

        .overflow-y-clip {
        overflow-y: clip;
        }

        .overflow-x-visible {
        overflow-x: visible;
        }

        .overflow-y-visible {
        overflow-y: visible;
        }

        .overflow-x-scroll {
        overflow-x: scroll;
        }

        .overflow-y-scroll {
        overflow-y: scroll;
        }

        .overscroll-auto {
        overscroll-behavior: auto;
        }

        .overscroll-contain {
        overscroll-behavior: contain;
        }

        .overscroll-none {
        overscroll-behavior: none;
        }

        .overscroll-y-auto {
        overscroll-behavior-y: auto;
        }

        .overscroll-y-contain {
        overscroll-behavior-y: contain;
        }

        .overscroll-y-none {
        overscroll-behavior-y: none;
        }

        .overscroll-x-auto {
        overscroll-behavior-x: auto;
        }

        .overscroll-x-contain {
        overscroll-behavior-x: contain;
        }

        .overscroll-x-none {
        overscroll-behavior-x: none;
        }

        .scroll-auto {
        scroll-behavior: auto;
        }

        .scroll-smooth {
        scroll-behavior: smooth;
        }

        .truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        }

        .overflow-ellipsis {
        text-overflow: ellipsis;
        }

        .text-ellipsis {
        text-overflow: ellipsis;
        }

        .text-clip {
        text-overflow: clip;
        }

        .hyphens-none {
        -webkit-hyphens: none;
                hyphens: none;
        }

        .hyphens-manual {
        -webkit-hyphens: manual;
                hyphens: manual;
        }

        .hyphens-auto {
        -webkit-hyphens: auto;
                hyphens: auto;
        }

        .whitespace-normal {
        white-space: normal;
        }

        .whitespace-nowrap {
        white-space: nowrap;
        }

        .whitespace-pre {
        white-space: pre;
        }

        .whitespace-pre-line {
        white-space: pre-line;
        }

        .whitespace-pre-wrap {
        white-space: pre-wrap;
        }

        .whitespace-break-spaces {
        white-space: break-spaces;
        }

        .break-normal {
        overflow-wrap: normal;
        word-break: normal;
        }

        .break-words {
        overflow-wrap: break-word;
        }

        .break-all {
        word-break: break-all;
        }

        .break-keep {
        word-break: keep-all;
        }

        .rounded {
        border-radius: 0.25rem;
        }

        .rounded-full {
        border-radius: 9999px;
        }

        .rounded-lg {
        border-radius: 0.5rem;
        }

        .rounded-md {
        border-radius: 0.375rem;
        }

        .rounded-xl {
        border-radius: 0.75rem;
        }

        .rounded-b {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        }

        .rounded-b-xl {
        border-bottom-right-radius: 0.75rem;
        border-bottom-left-radius: 0.75rem;
        }

        .rounded-e {
        border-start-end-radius: 0.25rem;
        border-end-end-radius: 0.25rem;
        }

        .rounded-l {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        }

        .rounded-l-lg {
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
        }

        .rounded-r {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        }

        .rounded-r-lg {
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
        }

        .rounded-s {
        border-start-start-radius: 0.25rem;
        border-end-start-radius: 0.25rem;
        }

        .rounded-t {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        }

        .rounded-bl {
        border-bottom-left-radius: 0.25rem;
        }

        .rounded-br {
        border-bottom-right-radius: 0.25rem;
        }

        .rounded-ee {
        border-end-end-radius: 0.25rem;
        }

        .rounded-es {
        border-end-start-radius: 0.25rem;
        }

        .rounded-se {
        border-start-end-radius: 0.25rem;
        }

        .rounded-ss {
        border-start-start-radius: 0.25rem;
        }

        .rounded-tl {
        border-top-left-radius: 0.25rem;
        }

        .rounded-tr {
        border-top-right-radius: 0.25rem;
        }

        .border {
        border-width: 1px;
        }

        .border-0 {
        border-width: 0px;
        }

        .border-x {
        border-left-width: 1px;
        border-right-width: 1px;
        }

        .border-y {
        border-top-width: 1px;
        border-bottom-width: 1px;
        }

        .border-b {
        border-bottom-width: 1px;
        }

        .border-e {
        border-inline-end-width: 1px;
        }

        .border-l {
        border-left-width: 1px;
        }

        .border-r {
        border-right-width: 1px;
        }

        .border-s {
        border-inline-start-width: 1px;
        }

        .border-t {
        border-top-width: 1px;
        }

        .border-solid {
        border-style: solid;
        }

        .border-dashed {
        border-style: dashed;
        }

        .border-dotted {
        border-style: dotted;
        }

        .border-double {
        border-style: double;
        }

        .border-hidden {
        border-style: hidden;
        }

        .border-none {
        border-style: none;
        }

        .border-blue-600 {
        --tw-border-opacity: 1;
        border-color: rgb(28 100 242 / var(--tw-border-opacity));
        }

        .border-blue-700 {
        --tw-border-opacity: 1;
        border-color: rgb(26 86 219 / var(--tw-border-opacity));
        }

        .border-gray-100 {
        --tw-border-opacity: 1;
        border-color: rgb(243 244 246 / var(--tw-border-opacity));
        }

        .border-gray-300 {
        --tw-border-opacity: 1;
        border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .border-neutral-200 {
        --tw-border-opacity: 1;
        border-color: rgb(229 229 229 / var(--tw-border-opacity));
        }

        .border-neutral-500 {
        --tw-border-opacity: 1;
        border-color: rgb(115 115 115 / var(--tw-border-opacity));
        }

        .border-neutral-800 {
        --tw-border-opacity: 1;
        border-color: rgb(38 38 38 / var(--tw-border-opacity));
        }

        .bg-\[rgb\(255\2c 0\2c 0\)\] {
        --tw-bg-opacity: 1;
        background-color: rgb(255 0 0 / var(--tw-bg-opacity));
        }

        .bg-blue-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(26 86 219 / var(--tw-bg-opacity));
        }

        .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .bg-gray-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }

        .bg-gray-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }

        .bg-gray-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }

        .bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity));
        }

        .bg-indigo-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(88 80 236 / var(--tw-bg-opacity));
        }

        .bg-neutral-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(229 229 229 / var(--tw-bg-opacity));
        }

        .bg-neutral-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(38 38 38 / var(--tw-bg-opacity));
        }

        .bg-neutral-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(23 23 23 / var(--tw-bg-opacity));
        }

        .bg-transparent {
        background-color: transparent;
        }

        .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .bg-white\/50 {
        background-color: rgb(255 255 255 / 0.5);
        }

        .bg-opacity-50 {
        --tw-bg-opacity: 0.5;
        }

        .bg-\[url\(\'\/images\/svg\/background\/lines\.svg\'\)\] {
        background-image: url('/images/svg/background/lines.svg');
        }

        .bg-gradient-to-r {
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
        }

        .from-indigo-600 {
        --tw-gradient-from: #5850EC var(--tw-gradient-from-position);
        --tw-gradient-from-position:  ;
        --tw-gradient-to: rgb(88 80 236 / 0)  var(--tw-gradient-from-position);
        --tw-gradient-to-position:  ;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .from-indigo-700 {
        --tw-gradient-from: #5145CD var(--tw-gradient-from-position);
        --tw-gradient-from-position:  ;
        --tw-gradient-to: rgb(81 69 205 / 0)  var(--tw-gradient-from-position);
        --tw-gradient-to-position:  ;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .to-violet-900 {
        --tw-gradient-to: #4c1d95 var(--tw-gradient-to-position);
        --tw-gradient-to-position:  ;
        }

        .decoration-slice {
        -webkit-box-decoration-break: slice;
                box-decoration-break: slice;
        }

        .decoration-clone {
        -webkit-box-decoration-break: clone;
                box-decoration-break: clone;
        }

        .box-decoration-slice {
        -webkit-box-decoration-break: slice;
                box-decoration-break: slice;
        }

        .box-decoration-clone {
        -webkit-box-decoration-break: clone;
                box-decoration-break: clone;
        }

        .bg-cover {
        background-size: cover;
        }

        .bg-fixed {
        background-attachment: fixed;
        }

        .bg-local {
        background-attachment: local;
        }

        .bg-scroll {
        background-attachment: scroll;
        }

        .bg-clip-border {
        background-clip: border-box;
        }

        .bg-clip-padding {
        background-clip: padding-box;
        }

        .bg-clip-content {
        background-clip: content-box;
        }

        .bg-clip-text {
        -webkit-background-clip: text;
                background-clip: text;
        }

        .bg-repeat {
        background-repeat: repeat;
        }

        .bg-no-repeat {
        background-repeat: no-repeat;
        }

        .bg-repeat-x {
        background-repeat: repeat-x;
        }

        .bg-repeat-y {
        background-repeat: repeat-y;
        }

        .bg-repeat-round {
        background-repeat: round;
        }

        .bg-repeat-space {
        background-repeat: space;
        }

        .bg-origin-border {
        background-origin: border-box;
        }

        .bg-origin-padding {
        background-origin: padding-box;
        }

        .bg-origin-content {
        background-origin: content-box;
        }

        .object-contain {
        -o-object-fit: contain;
            object-fit: contain;
        }

        .object-cover {
        -o-object-fit: cover;
            object-fit: cover;
        }

        .object-fill {
        -o-object-fit: fill;
            object-fit: fill;
        }

        .object-none {
        -o-object-fit: none;
            object-fit: none;
        }

        .object-scale-down {
        -o-object-fit: scale-down;
            object-fit: scale-down;
        }

        .p-1 {
        padding: 0.25rem;
        }

        .p-1\.5 {
        padding: 0.375rem;
        }

        .p-10 {
        padding: 2.5rem;
        }

        .p-16 {
        padding: 4rem;
        }

        .p-2 {
        padding: 0.5rem;
        }

        .p-2\.5 {
        padding: 0.625rem;
        }

        .p-3 {
        padding: 0.75rem;
        }

        .p-4 {
        padding: 1rem;
        }

        .p-5 {
        padding: 1.25rem;
        }

        .px-1 {
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        }

        .px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        }

        .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        }

        .px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        }

        .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        }

        .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
        }

        .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        }

        .py-2\.5 {
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
        }

        .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        }

        .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
        }

        .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        }

        .pb-0 {
        padding-bottom: 0px;
        }

        .pb-3 {
        padding-bottom: 0.75rem;
        }

        .pl-3 {
        padding-left: 0.75rem;
        }

        .pl-4 {
        padding-left: 1rem;
        }

        .pr-4 {
        padding-right: 1rem;
        }

        .pt-1 {
        padding-top: 0.25rem;
        }

        .pt-16 {
        padding-top: 4rem;
        }

        .pt-2 {
        padding-top: 0.5rem;
        }

        .pt-28 {
        padding-top: 7rem;
        }

        .pt-3 {
        padding-top: 0.75rem;
        }

        .pt-6 {
        padding-top: 1.5rem;
        }

        .text-left {
        text-align: left;
        }

        .text-center {
        text-align: center;
        }

        .text-right {
        text-align: right;
        }

        .text-justify {
        text-align: justify;
        }

        .text-start {
        text-align: start;
        }

        .text-end {
        text-align: end;
        }

        .align-baseline {
        vertical-align: baseline;
        }

        .align-top {
        vertical-align: top;
        }

        .align-middle {
        vertical-align: middle;
        }

        .align-bottom {
        vertical-align: bottom;
        }

        .align-text-top {
        vertical-align: text-top;
        }

        .align-text-bottom {
        vertical-align: text-bottom;
        }

        .align-sub {
        vertical-align: sub;
        }

        .align-super {
        vertical-align: super;
        }

        .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
        }

        .text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem;
        }

        .text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
        }

        .text-5xl {
        font-size: 3rem;
        line-height: 1;
        }

        .text-9xl {
        font-size: 8rem;
        line-height: 1;
        }

        .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
        }

        .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
        }

        .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
        }

        .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
        }

        .font-bold {
        font-weight: 700;
        }

        .font-extrabold {
        font-weight: 800;
        }

        .font-medium {
        font-weight: 500;
        }

        .font-normal {
        font-weight: 400;
        }

        .font-semibold {
        font-weight: 600;
        }

        .uppercase {
        text-transform: uppercase;
        }

        .lowercase {
        text-transform: lowercase;
        }

        .capitalize {
        text-transform: capitalize;
        }

        .normal-case {
        text-transform: none;
        }

        .italic {
        font-style: italic;
        }

        .not-italic {
        font-style: normal;
        }

        .normal-nums {
        font-variant-numeric: normal;
        }

        .ordinal {
        --tw-ordinal: ordinal;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .slashed-zero {
        --tw-slashed-zero: slashed-zero;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .lining-nums {
        --tw-numeric-figure: lining-nums;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .oldstyle-nums {
        --tw-numeric-figure: oldstyle-nums;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .proportional-nums {
        --tw-numeric-spacing: proportional-nums;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .tabular-nums {
        --tw-numeric-spacing: tabular-nums;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .diagonal-fractions {
        --tw-numeric-fraction: diagonal-fractions;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .stacked-fractions {
        --tw-numeric-fraction: stacked-fractions;
        font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
        }

        .leading-6 {
        line-height: 1.5rem;
        }

        .leading-9 {
        line-height: 2.25rem;
        }

        .text-\[\#336699\]\/\[\.35\] {
        color: rgb(51 102 153 / .35);
        }

        .text-blue-500 {
        --tw-text-opacity: 1;
        color: rgb(63 131 248 / var(--tw-text-opacity));
        }

        .text-blue-600 {
        --tw-text-opacity: 1;
        color: rgb(28 100 242 / var(--tw-text-opacity));
        }

        .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity));
        }

        .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity));
        }

        .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .text-green-600 {
        --tw-text-opacity: 1;
        color: rgb(5 122 85 / var(--tw-text-opacity));
        }

        .text-indigo-600 {
        --tw-text-opacity: 1;
        color: rgb(88 80 236 / var(--tw-text-opacity));
        }

        .text-neutral-300 {
        --tw-text-opacity: 1;
        color: rgb(212 212 212 / var(--tw-text-opacity));
        }

        .text-neutral-400 {
        --tw-text-opacity: 1;
        color: rgb(163 163 163 / var(--tw-text-opacity));
        }

        .text-neutral-500 {
        --tw-text-opacity: 1;
        color: rgb(115 115 115 / var(--tw-text-opacity));
        }

        .text-neutral-600 {
        --tw-text-opacity: 1;
        color: rgb(82 82 82 / var(--tw-text-opacity));
        }

        .text-neutral-900 {
        --tw-text-opacity: 1;
        color: rgb(23 23 23 / var(--tw-text-opacity));
        }

        .text-red-600 {
        --tw-text-opacity: 1;
        color: rgb(224 36 36 / var(--tw-text-opacity));
        }

        .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .underline {
        text-decoration-line: underline;
        }

        .overline {
        text-decoration-line: overline;
        }

        .line-through {
        text-decoration-line: line-through;
        }

        .no-underline {
        text-decoration-line: none;
        }

        .decoration-solid {
        text-decoration-style: solid;
        }

        .decoration-double {
        text-decoration-style: double;
        }

        .decoration-dotted {
        text-decoration-style: dotted;
        }

        .decoration-dashed {
        text-decoration-style: dashed;
        }

        .decoration-wavy {
        text-decoration-style: wavy;
        }

        .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        }

        .subpixel-antialiased {
        -webkit-font-smoothing: auto;
        -moz-osx-font-smoothing: auto;
        }

        .opacity-0 {
        opacity: 0;
        }

        .opacity-100 {
        opacity: 1;
        }

        .bg-blend-normal {
        background-blend-mode: normal;
        }

        .bg-blend-multiply {
        background-blend-mode: multiply;
        }

        .bg-blend-screen {
        background-blend-mode: screen;
        }

        .bg-blend-overlay {
        background-blend-mode: overlay;
        }

        .bg-blend-darken {
        background-blend-mode: darken;
        }

        .bg-blend-lighten {
        background-blend-mode: lighten;
        }

        .bg-blend-color-dodge {
        background-blend-mode: color-dodge;
        }

        .bg-blend-color-burn {
        background-blend-mode: color-burn;
        }

        .bg-blend-hard-light {
        background-blend-mode: hard-light;
        }

        .bg-blend-soft-light {
        background-blend-mode: soft-light;
        }

        .bg-blend-difference {
        background-blend-mode: difference;
        }

        .bg-blend-exclusion {
        background-blend-mode: exclusion;
        }

        .bg-blend-hue {
        background-blend-mode: hue;
        }

        .bg-blend-saturation {
        background-blend-mode: saturation;
        }

        .bg-blend-color {
        background-blend-mode: color;
        }

        .bg-blend-luminosity {
        background-blend-mode: luminosity;
        }

        .mix-blend-normal {
        mix-blend-mode: normal;
        }

        .mix-blend-multiply {
        mix-blend-mode: multiply;
        }

        .mix-blend-screen {
        mix-blend-mode: screen;
        }

        .mix-blend-overlay {
        mix-blend-mode: overlay;
        }

        .mix-blend-darken {
        mix-blend-mode: darken;
        }

        .mix-blend-lighten {
        mix-blend-mode: lighten;
        }

        .mix-blend-color-dodge {
        mix-blend-mode: color-dodge;
        }

        .mix-blend-color-burn {
        mix-blend-mode: color-burn;
        }

        .mix-blend-hard-light {
        mix-blend-mode: hard-light;
        }

        .mix-blend-soft-light {
        mix-blend-mode: soft-light;
        }

        .mix-blend-difference {
        mix-blend-mode: difference;
        }

        .mix-blend-exclusion {
        mix-blend-mode: exclusion;
        }

        .mix-blend-hue {
        mix-blend-mode: hue;
        }

        .mix-blend-saturation {
        mix-blend-mode: saturation;
        }

        .mix-blend-color {
        mix-blend-mode: color;
        }

        .mix-blend-luminosity {
        mix-blend-mode: luminosity;
        }

        .mix-blend-plus-lighter {
        mix-blend-mode: plus-lighter;
        }

        .\!shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1) !important;
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color) !important;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
        }

        .shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-2xl {
        --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-inner {
        --tw-shadow: inset 0 2px 4px 0 rgb(0 0 0 / 0.05);
        --tw-shadow-colored: inset 0 2px 4px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-md {
        --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
        }

        .outline {
        outline-style: solid;
        }

        .outline-dashed {
        outline-style: dashed;
        }

        .outline-dotted {
        outline-style: dotted;
        }

        .outline-double {
        outline-style: double;
        }

        .ring {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .ring-inset {
        --tw-ring-inset: inset;
        }

        .blur {
        --tw-blur: blur(8px);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .drop-shadow {
        --tw-drop-shadow: drop-shadow(0 1px 2px rgb(0 0 0 / 0.1)) drop-shadow(0 1px 1px rgb(0 0 0 / 0.06));
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .grayscale {
        --tw-grayscale: grayscale(100%);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .\!invert {
        --tw-invert: invert(100%) !important;
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
        }

        .invert {
        --tw-invert: invert(100%);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .sepia {
        --tw-sepia: sepia(100%);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .\!filter {
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
        }

        .filter {
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .filter-none {
        filter: none;
        }

        .backdrop-blur {
        --tw-backdrop-blur: blur(8px);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-blur-md {
        --tw-backdrop-blur: blur(12px);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-grayscale {
        --tw-backdrop-grayscale: grayscale(100%);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-invert {
        --tw-backdrop-invert: invert(100%);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-sepia {
        --tw-backdrop-sepia: sepia(100%);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-filter {
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
                backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-filter-none {
        -webkit-backdrop-filter: none;
                backdrop-filter: none;
        }

        .transition {
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        }

        .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        }

        .transition-opacity {
        transition-property: opacity;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        }

        .transition-transform {
        transition-property: transform;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        }

        .delay-150 {
        transition-delay: 150ms;
        }

        .delay-300 {
        transition-delay: 300ms;
        }

        .duration-300 {
        transition-duration: 300ms;
        }

        .duration-500 {
        transition-duration: 500ms;
        }

        .duration-700 {
        transition-duration: 700ms;
        }

        .ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
        }

        .ease-in-out {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .ease-out {
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }

        .content-\[\'this-is-also-valid\]-weirdly-enough\'\] {
        --tw-content: 'this-is-also-valid]-weirdly-enough';
        content: var(--tw-content);
        }

        .\[hostname\:port\] {
        hostname: port;
        }

        @media (min-width: 640px) {
        .sm\:container {
            width: 100%;
        }

        @media (min-width: 640px) {
            .sm\:container {
            max-width: 640px;
            }
        }

        @media (min-width: 768px) {
            .sm\:container {
            max-width: 768px;
            }
        }

        @media (min-width: 1024px) {
            .sm\:container {
            max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {
            .sm\:container {
            max-width: 1280px;
            }
        }

        @media (min-width: 1536px) {
            .sm\:container {
            max-width: 1536px;
            }
        }
        }

        .hover\:border-gray-300:hover {
        --tw-border-opacity: 1;
        border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .hover\:bg-blue-800:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(30 66 159 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-100:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-200:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }

        .hover\:bg-white:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .hover\:font-bold:hover {
        font-weight: 700;
        }

        .hover\:text-blue-600:hover {
        --tw-text-opacity: 1;
        color: rgb(28 100 242 / var(--tw-text-opacity));
        }

        .hover\:text-gray-600:hover {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .hover\:text-gray-900:hover {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .before\:hover\:text-center:hover::before {
        content: var(--tw-content);
        text-align: center;
        }

        .hover\:before\:text-center:hover::before {
        content: var(--tw-content);
        text-align: center;
        }

        .focus\:border-indigo-600:focus {
        --tw-border-opacity: 1;
        border-color: rgb(88 80 236 / var(--tw-border-opacity));
        }

        .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        }

        .focus\:ring-2:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .focus\:ring-4:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .focus\:ring-blue-300:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(164 202 254 / var(--tw-ring-opacity));
        }

        .focus\:ring-gray-200:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(229 231 235 / var(--tw-ring-opacity));
        }

        .focus\:ring-indigo-300:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(180 198 252 / var(--tw-ring-opacity));
        }

        .focus\:ring-indigo-600:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(88 80 236 / var(--tw-ring-opacity));
        }

        .focus\:hover\:text-center:hover:focus {
        text-align: center;
        }

        .hover\:focus\:text-center:focus:hover {
        text-align: center;
        }

        .hs-collapse.open .hs-collapse-open\:block {
        display: block;
        }

        .hs-collapse.open .hs-collapse-open\:hidden {
        display: none;
        }

        .hs-collapse.open.hs-collapse-open\:block {
        display: block;
        }

        .hs-collapse.open.hs-collapse-open\:hidden {
        display: none;
        }

        .hs-collapse-toggle.open .hs-collapse-open\:block {
        display: block;
        }

        .hs-collapse-toggle.open .hs-collapse-open\:hidden {
        display: none;
        }

        .hs-collapse-toggle.open.hs-collapse-open\:block {
        display: block;
        }

        .hs-collapse-toggle.open.hs-collapse-open\:hidden {
        display: none;
        }

        :is(.dark .dark\:border-blue-500) {
        --tw-border-opacity: 1;
        border-color: rgb(63 131 248 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:border-gray-600) {
        --tw-border-opacity: 1;
        border-color: rgb(75 85 99 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:border-gray-700) {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity));
        }

        :is(.dark .dark\:border-transparent) {
        border-color: transparent;
        }

        :is(.dark .dark\:bg-blue-600) {
        --tw-bg-opacity: 1;
        background-color: rgb(28 100 242 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-gray-600) {
        --tw-bg-opacity: 1;
        background-color: rgb(75 85 99 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-gray-700) {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-gray-800) {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:bg-gray-800\/50) {
        background-color: rgb(31 41 55 / 0.5);
        }

        :is(.dark .dark\:bg-opacity-80) {
        --tw-bg-opacity: 0.8;
        }

        :is(.dark .dark\:text-blue-500) {
        --tw-text-opacity: 1;
        color: rgb(63 131 248 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:text-gray-400) {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:text-white) {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:hover\:bg-blue-700:hover) {
        --tw-bg-opacity: 1;
        background-color: rgb(26 86 219 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:hover\:bg-gray-600:hover) {
        --tw-bg-opacity: 1;
        background-color: rgb(75 85 99 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:hover\:bg-gray-800:hover) {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }

        :is(.dark .dark\:hover\:text-blue-500:hover) {
        --tw-text-opacity: 1;
        color: rgb(63 131 248 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:hover\:text-gray-300:hover) {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity));
        }

        :is(.dark .dark\:hover\:text-white:hover) {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        @media (min-width: 640px) {
        .sm\:mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .sm\:mt-0 {
            margin-top: 0px;
        }

        .sm\:flex {
            display: flex;
        }

        .sm\:items-center {
            align-items: center;
        }

        .sm\:justify-end {
            justify-content: flex-end;
        }

        .sm\:justify-between {
            justify-content: space-between;
        }

        .sm\:py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .sm\:text-start {
            text-align: start;
        }

        .sm\:underline {
            text-decoration-line: underline;
        }
        }

        @media (min-width: 768px) {
        .md\:inset-0 {
            inset: 0px;
        }

        .md\:mb-0 {
            margin-bottom: 0px;
        }

        .md\:mt-0 {
            margin-top: 0px;
        }

        .md\:block {
            display: block;
        }

        .md\:flex {
            display: flex;
        }

        .md\:hidden {
            display: none;
        }

        .md\:h-4\/5 {
            height: 80%;
        }

        .md\:w-2\/5 {
            width: 40%;
        }

        .md\:w-3\/5 {
            width: 60%;
        }

        .md\:w-4\/5 {
            width: 80%;
        }

        .md\:w-7 {
            width: 1.75rem;
        }

        .md\:w-72 {
            width: 18rem;
        }

        @keyframes slide_down {
            0% {
            transform: translateY(-100%);
            }

            100% {
            transform: translateY(0%);
            }
        }

        .md\:animate-slide_down1000 {
            animation: slide_down 1s;
        }

        @keyframes slide_down {
            0% {
            transform: translateY(-100%);
            }

            100% {
            transform: translateY(0%);
            }
        }

        .md\:animate-slide_down400 {
            animation: slide_down .4s;
        }

        @keyframes slide_down {
            0% {
            transform: translateY(-100%);
            }

            100% {
            transform: translateY(0%);
            }
        }

        .md\:animate-slide_down600 {
            animation: slide_down .6s;
        }

        @keyframes slide_down {
            0% {
            transform: translateY(-100%);
            }

            100% {
            transform: translateY(0%);
            }
        }

        .md\:animate-slide_down800 {
            animation: slide_down .8s;
        }

        .md\:flex-row {
            flex-direction: row;
        }

        .md\:flex-nowrap {
            flex-wrap: nowrap;
        }

        .md\:items-center {
            align-items: center;
        }

        .md\:justify-start {
            justify-content: flex-start;
        }

        .md\:justify-end {
            justify-content: flex-end;
        }

        .md\:justify-between {
            justify-content: space-between;
        }

        .md\:gap-5 {
            gap: 1.25rem;
        }

        .md\:border-0 {
            border-width: 0px;
        }

        .md\:bg-transparent {
            background-color: transparent;
        }

        .md\:p-0 {
            padding: 0px;
        }

        .md\:pl-5 {
            padding-left: 1.25rem;
        }

        .md\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .md\:text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .md\:text-5xl {
            font-size: 3rem;
            line-height: 1;
        }

        .md\:text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .md\:text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .md\:text-neutral-400 {
            --tw-text-opacity: 1;
            color: rgb(163 163 163 / var(--tw-text-opacity));
        }

        .md\:hover\:bg-transparent:hover {
            background-color: transparent;
        }

        .md\:hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        }

        @media (min-width: 1024px) {
        .lg\:order-first {
            order: -9999;
        }

        .lg\:order-last {
            order: 9999;
        }

        .lg\:my-8 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .lg\:mb-0 {
            margin-bottom: 0px;
        }

        .lg\:ml-16 {
            margin-left: 4rem;
        }

        .lg\:mt-0 {
            margin-top: 0px;
        }

        .lg\:grid {
            display: grid;
        }

        .lg\:w-4\/5 {
            width: 80%;
        }

        .lg\:w-full {
            width: 100%;
        }

        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .lg\:justify-start {
            justify-content: flex-start;
        }

        .lg\:gap-24 {
            gap: 6rem;
        }

        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .lg\:py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .lg\:text-left {
            text-align: left;
        }

        .lg\:text-start {
            text-align: start;
        }

        :is(.dark .dark\:lg\:hover\:\[paint-order\:markers\]:hover) {
            paint-order: markers;
        }
        }

        @media (min-width: 1280px) {
        .xl\:w-10 {
            width: 2.5rem;
        }

        .xl\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .xl\:text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .xl\:text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }

        .xl\:text-6xl {
            font-size: 3.75rem;
            line-height: 1;
        }

        .xl\:text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .xl\:delay-150 {
            transition-delay: 150ms;
        }

        .xl\:delay-300 {
            transition-delay: 300ms;
        }

        .xl\:delay-500 {
            transition-delay: 500ms;
        }
        }
    </style>
    <title>Error <?php echo $_GET["eCode"]; ?></title>
</head>
<body>
    <?php
        if($_GET["eCode"] == 401) {
    ?>
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>401
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, you are not authorized to continue.</p>
                <p class="mt-4 mb-8">But dont worry, you can find plenty of other things on my homepage.</p>
                <a rel="noopener noreferrer" href="https://www.fgentili.it/" class="px-8 py-3 font-semibold rounded">Back to homepage</a>
            </div>
        </div>
    </section>
    <?php
    }else if($_GET["eCode"] == 403) {
    ?>
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>403
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, you do not have permission to continue.</p>
                <p class="mt-4 mb-8">But dont worry, you can find plenty of other things on my homepage.</p>
                <a rel="noopener noreferrer" href="https://www.fgentili.it/" class="px-8 py-3 font-semibold rounded">Back to homepage</a>
            </div>
        </div>
    </section>
    <?php
    } else if($_GET["eCode"] == 404) {
    ?>
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>404
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, i can't find this page.</p>
                <p class="mt-4 mb-8">But dont worry, you can find plenty of other things on my homepage.</p>
                <a rel="noopener noreferrer" href="https://www.fgentili.it/" class="px-8 py-3 font-semibold rounded">Back to homepage</a>
            </div>
        </div>
    </section>
    <?php
    }else if($_GET["eCode"] == 500) {
    ?>
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>500
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, something went wrong.</p>
                <p class="mt-4 mb-8">But dont worry, it will resolve soon. If you want send an email to the admin of the server: <a class="font-semibold" href="mailto:federicogentili05@gmail.com">federicogentili05@gmail.com</a></p>
            </div>
        </div>
    </section>
    <?php
    } else {
    ?>
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>BRO
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">What are you doing here?</p>
                <p class="mt-4 mb-8">Go back to the home page otherwise you're here doing nothing.</p>
                <a rel="noopener noreferrer" href="https://www.fgentili.it/" class="px-8 py-3 font-semibold rounded">Back to homepage</a>
            </div>
        </div>
    </section>
    <?php
    }
    ?>
</body>
</html>