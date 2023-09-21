---
id: 831d8e08-35c3-49b3-9153-d7eca65f3cdb
blueprint: page
title: 'Test Page / Bard Sets'
page_blocks:
  -
    type: set
    attrs:
      id: lmtgje3v
      values:
        type: hero
        image: 100-club_photo-150x150.jpg
        content:
          -
            type: heading
            attrs:
              level: 1
            content:
              -
                type: text
                text: 'This is something'
          -
            type: paragraph
            content:
              -
                type: image
                attrs:
                  src: 'asset::assets::1-1440x640.jpg'
                  alt: null
          -
            type: paragraph
            content:
              -
                type: text
                text: 'This is the hero content.'
          -
            type: set
            attrs:
              id: lmtgn0bw
              values:
                type: buttons
                buttons:
                  -
                    id: lmtgn16e
                    button_text: 'This is some button text'
                    link_target: 46a3c5ef-af28-4db6-81b4-4ba06ed4b426
                    use_custom_url: false
                    target_blank: false
                    type: button
                    enabled: true
                    color: '#5ecaff'
          -
            type: paragraph
  -
    type: paragraph
opengraph_title: '{{ meta_title }}'
opengraph_description: '{{ meta_description }}'
template: templates/default
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1695325446
---
