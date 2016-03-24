<?php

/**
 * Author	:IsmoBroto
 * Description	:
 */
function mdi_list() {
    $mdi = array('mdi-action-3d-rotation', 'mdi-action-accessibility', 'mdi-action-account-balance-wallet', 'mdi-action-account-balance', 'mdi-action-account-box', 'mdi-action-account-child', 'mdi-action-account-circle', 'mdi-action-add-shopping-cart', 'mdi-action-alarm-add', 'mdi-action-alarm-off', 'mdi-action-alarm-off', 'mdi-action-alarm-on', 'mdi-action-android', 'mdi-action-announcement', 'mdi-action-aspect-ratio', 'mdi-action-assessment', 'mdi-action-assignment', 'mdi-action-assignment-ind', 'mdi-action-assignment-late', 'mdi-action-assignment-return', 'mdi-action-assignment-returned', 'mdi-action-assignment-turned-in', 'mdi-action-autorenew', 'mdi-action-backup', 'mdi-action-book', 'mdi-action-bookmark', 'mdi-action-bookmark-outline', 'mdi-action-bug-report', 'mdi-action-cached', 'mdi-action-class', 'mdi-action-credit-card', 'mdi-action-dashboard', 'mdi-action-delete', 'mdi-action-description', 'mdi-action-dns', 'mdi-action-done', 'mdi-action-done-all', 'mdi-action-event', 'mdi-action-exit-to-app', 'mdi-action-explore', 'mdi-action-extension', 'mdi-action-face-unlock', 'mdi-action-favorite', 'mdi-action-favorite-outline', 'mdi-action-find-in-page', 'mdi-action-find-replace', 'mdi-action-flip-to-back', 'mdi-action-flip-to-front', 'mdi-action-get-app', 'mdi-action-grade', 'mdi-action-group-work', 'mdi-action-help', 'mdi-action-highlight-remove', 'mdi-action-history', 'mdi-action-home', 'mdi-action-https', 'mdi-action-info', 'mdi-action-info-outline', 'mdi-action-input', 'mdi-action-invert-colors', 'mdi-action-label', 'mdi-action-label-outline', 'mdi-action-language', 'mdi-action-launch', 'mdi-action-list', 'mdi-action-lock', 'mdi-action-lock-open', 'mdi-action-lock-outline', 'mdi-action-loyalty', 'mdi-action-markunread-mailbox', 'mdi-action-note-add', 'mdi-action-open-in-browser', 'mdi-action-open-in-new', 'mdi-action-open-with', 'mdi-action-pageview', 'mdi-action-payment', 'mdi-action-perm-camera-mic', 'mdi-action-perm-contact-cal', 'mdi-action-perm-data-setting', 'mdi-action-perm-device-info', 'mdi-action-perm-identity', 'mdi-action-perm-media', 'mdi-action-perm-phone-msg', 'mdi-action-perm-scan-wifi', 'mdi-action-picture-in-picture', 'mdi-action-polymer', 'mdi-action-print', 'mdi-action-query-builder', 'mdi-action-question-answer', 'mdi-action-receipt', 'mdi-action-redeem', 'mdi-action-report-problem', 'mdi-action-restore', 'mdi-action-room', 'mdi-action-schedule', 'mdi-action-search', 'mdi-action-settings', 'mdi-action-settings-applications', 'mdi-action-settings-backup-restore', 'mdi-action-settings-bluetooth', 'mdi-action-settings-cell', 'mdi-action-settings-display', 'mdi-action-settings-ethernet', 'mdi-action-settings-input-antenna', 'mdi-action-settings-input-component', 'mdi-action-settings-input-composite', 'mdi-action-settings-input-hdmi', 'mdi-action-settings-input-svideo', 'mdi-action-settings-overscan', 'mdi-action-settings-phone', 'mdi-action-settings-power', 'mdi-action-settings-remote', 'mdi-action-settings-voice', 'mdi-action-shop', 'mdi-action-shopping-basket', 'mdi-action-shopping-cart', 'mdi-action-shop-two', 'mdi-action-speaker-notes', 'mdi-action-spellcheck', 'mdi-action-star-rate', 'mdi-action-stars', 'mdi-action-store', 'mdi-action-subject', 'mdi-action-swap-horiz', 'mdi-action-swap-vert', 'mdi-action-swap-vert-circle', 'mdi-action-system-update-tv', 'mdi-action-tab', 'mdi-action-tab-unselected', 'mdi-action-theaters', 'mdi-action-thumb-down', 'mdi-action-thumbs-up-down', 'mdi-action-thumb-up', 'mdi-action-toc', 'mdi-action-today', 'mdi-action-track-changes', 'mdi-action-translate', 'mdi-action-trending-down', 'mdi-action-trending-neutral', 'mdi-action-trending-up', 'mdi-action-turned-in', 'mdi-action-turned-in-not', 'mdi-action-verified-user', 'mdi-action-view-agenda', 'mdi-action-view-array', 'mdi-action-view-carousel', 'mdi-action-view-column', 'mdi-action-view-day', 'mdi-action-view-headline', 'mdi-action-view-list', 'mdi-action-view-module', 'mdi-action-view-quilt', 'mdi-action-view-stream', 'mdi-action-view-week', 'mdi-action-visibility', 'mdi-action-visibility-off', 'mdi-action-wallet-giftcard', 'mdi-action-wallet-membership', 'mdi-action-wallet-travel', 'mdi-action-work', 'mdi-alert-error', 'mdi-alert-warning', 'mdi-av-album', 'mdi-av-timer', 'mdi-av-closed-caption', 'mdi-av-equalizer', 'mdi-av-explicit', 'mdi-av-fast-forward', 'mdi-av-fast-rewind', 'mdi-av-games', 'mdi-av-hearing', 'mdi-av-high-quality', 'mdi-av-loop', 'mdi-av-mic', 'mdi-av-mic-none', 'mdi-av-mic-off', 'mdi-av-movie', 'mdi-av-my-library-add', 'mdi-av-my-library-books', 'mdi-av-my-library-music', 'mdi-av-new-releases', 'mdi-av-not-interested', 'mdi-av-pause', 'mdi-av-pause-circle-fill', 'mdi-av-pause-circle-outline', 'mdi-av-play-arrow', 'mdi-av-play-circle-fill', 'mdi-av-play-circle-outline', 'mdi-av-playlist-add', 'mdi-av-play-shopping-bag', 'mdi-av-queue', 'mdi-av-queue-music', 'mdi-av-radio', 'mdi-av-recent-actors', 'mdi-av-repeat', 'mdi-av-repeat-one', 'mdi-av-replay', 'mdi-av-shuffle', 'mdi-av-skip-next', 'mdi-av-skip-previous', 'mdi-av-snooze', 'mdi-av-stop', 'mdi-av-subtitles', 'mdi-av-surround-sound', 'mdi-av-videocam', 'mdi-av-videocam-off', 'mdi-av-video-collection', 'mdi-av-volume-down', 'mdi-av-volume-mute', 'mdi-av-volume-off', 'mdi-av-volume-up', 'mdi-av-web', 'mdi-communication-business', 'mdi-communication-call', 'mdi-communication-call-end', 'mdi-communication-call-made', 'mdi-communication-call-merge', 'mdi-communication-call-missed', 'mdi-communication-call-received', 'mdi-communication-call-split', 'mdi-communication-chat', 'mdi-communication-clear-all', 'mdi-communication-comment', 'mdi-communication-contacts', 'mdi-communication-dialer-sip', 'mdi-communication-dialpad', 'mdi-communication-dnd-on', 'mdi-communication-email', 'mdi-communication-forum', 'mdi-communication-import-export', 'mdi-communication-invert-colors-off', 'mdi-communication-invert-colors-on', 'mdi-communication-live-help', 'mdi-communication-location-off', 'mdi-communication-location-on', 'mdi-communication-message', 'mdi-communication-messenger', 'mdi-communication-no-sim', 'mdi-communication-phone', 'mdi-communication-portable-wifi-off', 'mdi-communication-quick-contacts-dialer', 'mdi-communication-quick-contacts-mail', 'mdi-communication-ring-volume', 'mdi-communication-stay-current-landscape', 'mdi-communication-stay-current-portrait', 'mdi-communication-stay-primary-landscape', 'mdi-communication-stay-primary-portrait', 'mdi-communication-swap-calls', 'mdi-communication-textsms', 'mdi-communication-voicemail', 'mdi-communication-vpn-key', 'mdi-content-add', 'mdi-content-add-box', 'mdi-content-add-circle', 'mdi-content-add-circle-outline', 'mdi-content-archive', 'mdi-content-backspace', 'mdi-content-block', 'mdi-content-clear', 'mdi-content-content-copy', 'mdi-content-content-cut', 'mdi-content-content-paste', 'mdi-content-create', 'mdi-content-drafts', 'mdi-content-filter-list', 'mdi-content-flag', 'mdi-content-forward', 'mdi-content-gesture', 'mdi-content-inbox', 'mdi-content-link', 'mdi-content-mail', 'mdi-content-markunread', 'mdi-content-redo', 'mdi-content-remove', 'mdi-content-remove-circle', 'mdi-content-remove-circle-outline', 'mdi-content-reply', 'mdi-content-reply-all', 'mdi-content-report', 'mdi-content-save', 'mdi-content-select-all', 'mdi-content-send', 'mdi-content-sort', 'mdi-content-text-format', 'mdi-content-undo', 'mdi-device-access-alarm', 'mdi-device-access-alarms', 'mdi-device-access-time', 'mdi-device-add-alarm', 'mdi-device-airplanemode-off', 'mdi-device-airplanemode-on', 'mdi-device-battery-20', 'mdi-device-battery-30', 'mdi-device-battery-50', 'mdi-device-battery-60', 'mdi-device-battery-80', 'mdi-device-battery-90', 'mdi-device-battery-alert', 'mdi-device-battery-charging-20', 'mdi-device-battery-charging-30', 'mdi-device-battery-charging-50', 'mdi-device-battery-charging-60', 'mdi-device-battery-charging-80', 'mdi-device-battery-charging-90', 'mdi-device-battery-charging-full', 'mdi-device-battery-full', 'mdi-device-battery-std', 'mdi-device-battery-unknown', 'mdi-device-bluetooth', 'mdi-device-bluetooth-connected', 'mdi-device-bluetooth-disabled', 'mdi-device-bluetooth-searching', 'mdi-device-brightness-auto', 'mdi-device-brightness-high', 'mdi-device-brightness-low', 'mdi-device-brightness-medium', 'mdi-device-data-usage', 'mdi-device-developer-mode', 'mdi-device-devices', 'mdi-device-dvr', 'mdi-device-gps-fixed', 'mdi-device-gps-not-fixed', 'mdi-device-gps-off', 'mdi-device-location-disabled', 'mdi-device-location-searching', 'mdi-device-multitrack-audio', 'mdi-device-network-cell', 'mdi-device-network-wifi', 'mdi-device-nfc', 'mdi-device-now-wallpaper', 'mdi-device-now-widgets', 'mdi-device-screen-lock-landscape', 'mdi-device-screen-lock-portrait', 'mdi-device-screen-lock-rotation', 'mdi-device-screen-rotation', 'mdi-device-sd-storage', 'mdi-device-settings-system-daydream', 'mdi-device-signal-cellular-0-bar', 'mdi-device-signal-cellular-1-bar', 'mdi-device-signal-cellular-2-bar', 'mdi-device-signal-cellular-3-bar', 'mdi-device-signal-cellular-4-bar', 'mdi-device-signal-cellular-connected-no-internet-0-bar', 'mdi-device-signal-cellular-connected-no-internet-1-bar', 'mdi-device-signal-cellular-connected-no-internet-2-bar', 'mdi-device-signal-cellular-connected-no-internet-3-bar', 'mdi-device-signal-cellular-connected-no-internet-4-bar', 'mdi-device-signal-cellular-no-sim', 'mdi-device-signal-cellular-null', 'mdi-device-signal-cellular-off', 'mdi-device-signal-wifi-0-bar', 'mdi-device-signal-wifi-1-bar', 'mdi-device-signal-wifi-2-bar', 'mdi-device-signal-wifi-3-bar', 'mdi-device-signal-wifi-4-bar', 'mdi-device-signal-wifi-off', 'mdi-device-storage', 'mdi-device-usb', 'mdi-device-wifi-lock', 'mdi-device-wifi-tethering', 'mdi-editor-attach-file', 'mdi-editor-attach-money', 'mdi-editor-border-all', 'mdi-editor-border-bottom', 'mdi-editor-border-clear', 'mdi-editor-border-color', 'mdi-editor-border-horizontal', 'mdi-editor-border-inner', 'mdi-editor-border-left', 'mdi-editor-border-outer', 'mdi-editor-border-right', 'mdi-editor-border-style', 'mdi-editor-border-top', 'mdi-editor-border-vertical', 'mdi-editor-format-align-center', 'mdi-editor-format-align-justify', 'mdi-editor-format-align-left', 'mdi-editor-format-align-right', 'mdi-editor-format-bold', 'mdi-editor-format-clear', 'mdi-editor-format-color-fill', 'mdi-editor-format-color-reset', 'mdi-editor-format-color-text', 'mdi-editor-format-indent-decrease', 'mdi-editor-format-indent-increase', 'mdi-editor-format-italic', 'mdi-editor-format-line-spacing', 'mdi-editor-format-list-bulleted', 'mdi-editor-format-list-numbered', 'mdi-editor-format-paint', 'mdi-editor-format-quote', 'mdi-editor-format-size', 'mdi-editor-format-strikethrough', 'mdi-editor-functions', 'mdi-editor-format-textdirection-l-to-r', 'mdi-editor-format-underline', 'mdi-editor-format-textdirection-r-to-l', 'mdi-editor-insert-chart', 'mdi-editor-insert-comment', 'mdi-editor-insert-drive-file', 'mdi-editor-insert-emoticon', 'mdi-editor-insert-invitation', 'mdi-editor-insert-link', 'mdi-editor-insert-photo', 'mdi-editor-merge-type', 'mdi-editor-mode-comment', 'mdi-editor-mode-edit', 'mdi-editor-publish', 'mdi-editor-vertical-align-bottom', 'mdi-editor-vertical-align-center', 'mdi-editor-vertical-align-top', 'mdi-editor-wrap-text', 'mdi-file-attachment', 'mdi-file-cloud', 'mdi-file-cloud-circle', 'mdi-file-cloud-done', 'mdi-file-cloud-download', 'mdi-file-cloud-off', 'mdi-file-cloud-queue', 'mdi-file-cloud-upload', 'mdi-file-file-download', 'mdi-file-file-upload', 'mdi-file-folder', 'mdi-file-folder-open', 'mdi-file-folder-shared', 'mdi-hardware-cast', 'mdi-hardware-cast-connected', 'mdi-hardware-computer', 'mdi-hardware-desktop-mac', 'mdi-hardware-desktop-windows', 'mdi-hardware-dock', 'mdi-hardware-gamepad', 'mdi-hardware-headset', 'mdi-hardware-headset-mic', 'mdi-hardware-keyboard', 'mdi-hardware-keyboard-alt', 'mdi-hardware-keyboard-arrow-down', 'mdi-hardware-keyboard-arrow-left', 'mdi-hardware-keyboard-arrow-right', 'mdi-hardware-keyboard-arrow-up', 'mdi-hardware-keyboard-backspace', 'mdi-hardware-keyboard-capslock', 'mdi-hardware-keyboard-control', 'mdi-hardware-keyboard-hide', 'mdi-hardware-keyboard-return', 'mdi-hardware-keyboard-tab', 'mdi-hardware-keyboard-voice', 'mdi-hardware-laptop', 'mdi-hardware-laptop-chromebook', 'mdi-hardware-laptop-mac', 'mdi-hardware-laptop-windows', 'mdi-hardware-memory', 'mdi-hardware-mouse', 'mdi-hardware-phone-android', 'mdi-hardware-phone-iphone', 'mdi-hardware-phonelink', 'mdi-hardware-phonelink-off', 'mdi-hardware-security', 'mdi-hardware-sim-card', 'mdi-hardware-smartphone', 'mdi-hardware-speaker', 'mdi-hardware-tablet', 'mdi-hardware-tablet-android', 'mdi-hardware-tablet-mac', 'mdi-hardware-tv', 'mdi-hardware-watch', 'mdi-image-add-to-photos', 'mdi-image-adjust', 'mdi-image-assistant-photo', 'mdi-image-audiotrack', 'mdi-image-blur-circular', 'mdi-image-blur-linear', 'mdi-image-blur-off', 'mdi-image-blur-on', 'mdi-image-brightness-1', 'mdi-image-brightness-2', 'mdi-image-brightness-3', 'mdi-image-brightness-4', 'mdi-image-brightness-5', 'mdi-image-brightness-6', 'mdi-image-brightness-7', 'mdi-image-brush', 'mdi-image-camera', 'mdi-image-camera-alt', 'mdi-image-camera-front', 'mdi-image-camera-rear', 'mdi-image-camera-roll', 'mdi-image-center-focus-strong', 'mdi-image-center-focus-weak', 'mdi-image-collections', 'mdi-image-colorize', 'mdi-image-color-lens', 'mdi-image-compare', 'mdi-image-control-point', 'mdi-image-control-point-duplicate', 'mdi-image-crop', 'mdi-image-crop-3-2', 'mdi-image-crop-5-4', 'mdi-image-crop-7-5', 'mdi-image-crop-16-9', 'mdi-image-crop-din', 'mdi-image-crop-free', 'mdi-image-crop-landscape', 'mdi-image-crop-original', 'mdi-image-crop-portrait', 'mdi-image-crop-square', 'mdi-image-dehaze', 'mdi-image-details', 'mdi-image-edit', 'mdi-image-exposure', 'mdi-image-exposure-minus-1', 'mdi-image-exposure-minus-2', 'mdi-image-exposure-plus-1', 'mdi-image-exposure-plus-2', 'mdi-image-exposure-zero', 'mdi-image-filter', 'mdi-image-filter-1', 'mdi-image-filter-2', 'mdi-image-filter-3', 'mdi-image-filter-4', 'mdi-image-filter-5', 'mdi-image-filter-6', 'mdi-image-filter-7', 'mdi-image-filter-8', 'mdi-image-filter-9', 'mdi-image-filter-9-plus', 'mdi-image-filter-b-and-w', 'mdi-image-filter-center-focus', 'mdi-image-filter-drama', 'mdi-image-filter-frames', 'mdi-image-filter-hdr', 'mdi-image-filter-none', 'mdi-image-filter-tilt-shift', 'mdi-image-filter-vintage', 'mdi-image-flare', 'mdi-image-flash-auto', 'mdi-image-flash-off', 'mdi-image-flash-on', 'mdi-image-flip', 'mdi-image-gradient', 'mdi-image-grain', 'mdi-image-grid-off', 'mdi-image-grid-on', 'mdi-image-hdr-off', 'mdi-image-hdr-on', 'mdi-image-hdr-strong', 'mdi-image-hdr-weak', 'mdi-image-healing', 'mdi-image-image', 'mdi-image-image-aspect-ratio', 'mdi-image-iso', 'mdi-image-landscape', 'mdi-image-leak-add', 'mdi-image-leak-remove', 'mdi-image-lens', 'mdi-image-looks', 'mdi-image-looks-3', 'mdi-image-looks-4', 'mdi-image-looks-5', 'mdi-image-looks-6', 'mdi-image-looks-one', 'mdi-image-looks-two', 'mdi-image-loupe', 'mdi-image-movie-creation', 'mdi-image-nature', 'mdi-image-nature-people', 'mdi-image-navigate-before', 'mdi-image-navigate-next', 'mdi-image-palette', 'mdi-image-panorama', 'mdi-image-panorama-fisheye', '', 'mdi-image-panorama-horizontal', 'mdi-image-panorama-vertical', 'mdi-image-panorama-wide-angle', 'mdi-image-photo', 'mdi-image-photo-album', 'mdi-image-photo-camera', 'mdi-image-photo-library', 'mdi-image-portrait', 'mdi-image-remove-red-eye', 'mdi-image-rotate-left', 'mdi-image-rotate-right', 'mdi-image-slideshow', 'mdi-image-straighten', 'mdi-image-style', 'mdi-image-switch-camera', 'mdi-image-switch-video', 'mdi-image-tag-faces', 'mdi-image-texture', 'mdi-image-timelapse', 'mdi-image-timer', 'mdi-image-timer-3', 'mdi-image-timer-10', 'mdi-image-timer-auto', 'mdi-image-timer-off', 'mdi-image-tonality', 'mdi-image-transform', 'mdi-image-tune', 'mdi-image-wb-auto', 'mdi-image-wb-cloudy', 'mdi-image-wb-incandescent', 'mdi-image-wb-irradescent', 'mdi-image-wb-sunny', 'mdi-maps-beenhere', 'mdi-maps-directions', 'mdi-maps-directions-bike', 'mdi-maps-directions-bus', 'mdi-maps-directions-car', 'mdi-maps-directions-ferry', 'mdi-maps-directions-subway', 'mdi-maps-directions-train', 'mdi-maps-directions-transit', 'mdi-maps-directions-walk', 'mdi-maps-flight', 'mdi-maps-hotel', 'mdi-maps-layers', 'mdi-maps-layers-clear', 'mdi-maps-local-airport', 'mdi-maps-local-atm', 'mdi-maps-local-attraction', 'mdi-maps-local-bar', 'mdi-maps-local-cafe', 'mdi-maps-local-car-wash', 'mdi-maps-local-convenience-store', 'mdi-maps-local-drink', 'mdi-maps-local-florist', 'mdi-maps-local-gas-station', 'mdi-maps-local-grocery-store', 'mdi-maps-local-hospital', 'mdi-maps-local-hotel', 'mdi-maps-local-laundry-service', 'mdi-maps-local-library', 'mdi-maps-local-mall', 'mdi-maps-local-movies', 'mdi-maps-local-offer', 'mdi-maps-local-parking', 'mdi-maps-local-pharmacy', 'mdi-maps-local-phone', 'mdi-maps-local-pizza', 'mdi-maps-local-play', 'mdi-maps-local-post-office', 'mdi-maps-local-print-shop', 'mdi-maps-local-restaurant', 'mdi-maps-local-see', 'mdi-maps-local-shipping', 'mdi-maps-local-taxi', 'mdi-maps-location-history', 'mdi-maps-map', 'mdi-maps-my-location', 'mdi-maps-navigation', 'mdi-maps-pin-drop', 'mdi-maps-place', 'mdi-maps-rate-review', 'mdi-maps-restaurant-menu', 'mdi-maps-satellite', 'mdi-maps-store-mall-directory', 'mdi-maps-terrain', 'mdi-maps-traffic', 'mdi-navigation-apps', 'mdi-navigation-arrow-back', 'mdi-navigation-arrow-drop-down', 'mdi-navigation-arrow-drop-down-circle', 'mdi-navigation-arrow-drop-up', 'mdi-navigation-arrow-forward', 'mdi-navigation-cancel', 'mdi-navigation-check', 'mdi-navigation-chevron-left', 'mdi-navigation-chevron-right', 'mdi-navigation-close', 'mdi-navigation-expand-less', 'mdi-navigation-expand-more', 'mdi-navigation-fullscreen', 'mdi-navigation-fullscreen-exit', 'mdi-navigation-menu', 'mdi-navigation-more-horiz', 'mdi-navigation-more-vert', 'mdi-navigation-refresh', 'mdi-navigation-unfold-less', 'mdi-navigation-unfold-more', 'mdi-notification-adb', 'mdi-notification-bluetooth-audio', 'mdi-notification-disc-full', 'mdi-notification-dnd-forwardslash', 'mdi-notification-do-not-disturb', 'mdi-notification-drive-eta', 'mdi-notification-event-available', 'mdi-notification-event-busy', 'mdi-notification-event-note', 'mdi-notification-folder-special', 'mdi-notification-mms', 'mdi-notification-more', 'mdi-notification-network-locked', 'mdi-notification-phone-bluetooth-speaker', 'mdi-notification-phone-forwarded', 'mdi-notification-phone-in-talk', 'mdi-notification-phone-locked', 'mdi-notification-phone-missed', 'mdi-notification-phone-paused', 'mdi-notification-play-download', 'mdi-notification-play-install', 'mdi-notification-sd-card', 'mdi-notification-sim-card-alert', 'mdi-notification-sms', 'mdi-notification-sms-failed', 'mdi-notification-sync', 'mdi-notification-sync-disabled', 'mdi-notification-sync-problem', 'mdi-notification-system-update', 'mdi-notification-tap-and-play', 'mdi-notification-time-to-leave', 'mdi-notification-vibration', 'mdi-notification-voice-chat', 'mdi-notification-vpn-lock', 'mdi-social-cake', 'mdi-social-domain', 'mdi-social-group', 'mdi-social-group-add', 'mdi-social-location-city', 'mdi-social-mood', 'mdi-social-notifications', 'mdi-social-notifications-none', 'mdi-social-notifications-off', 'mdi-social-notifications-on', 'mdi-social-notifications-paused', 'mdi-social-pages', 'mdi-social-party-mode', 'mdi-social-people', 'mdi-social-people-outline', 'mdi-social-person', 'mdi-social-person-add', 'mdi-social-person-outline', 'mdi-social-plus-one', 'mdi-social-poll', 'mdi-social-public', 'mdi-social-school', 'mdi-social-share', 'mdi-social-whatshot', 'mdi-toggle-check-box', 'mdi-toggle-check-box-outline-blank', 'mdi-toggle-radio-button-off', 'mdi-toggle-radio-button-on');
    return $mdi;
}