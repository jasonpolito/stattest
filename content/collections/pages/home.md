---
id: 0eb074a1-ecc6-4bd9-95a3-c8cbba8cc537
blueprint: page
title: Home
author: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
mode: htmlmixed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1691179952
template: default
custom_content: false
use_blocks: true
opengraph_image: minis.jpeg
content:
  -
    type: set
    attrs:
      id: lkva0pad
      values:
        type: hero
        title_text: 'Immigration Lawyer Online'
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Need assistance with your immigration status?'
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Compassionate legal support for individuals and families.'
        buttons:
          -
            id: lkva1ch5
            text: 'Schedule Consultation'
            url: '#'
            details:
              style: primary
              size: normal
              icon: arrow-right-small
              new_tab: false
            type: buttons
            enabled: true
          -
            id: lkwltsif
            text: 'Immigration Services'
            url: '#services'
            details:
              style: unstyled
              size: normal
              icon: null
              new_tab: false
            type: buttons
            enabled: true
        use_custom_html: false
        custom_html:
          code: null
          mode: htmlmixed
        details:
          title_tag: h1
          align_text: left
          size: lg
        image: smile.jpeg
  -
    type: set
    attrs:
      id: lkwie232
      values:
        type: touts
        touts:
          -
            id: lkwie3os
            title: Expertise
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Our immigration attorneys have in-depth knowledge of complex laws and regulations.'
            type: touts
            enabled: true
          -
            id: lkwieiu8
            title: Guidance
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Providing tailored advice for your unique situation and immigration goals.'
            type: touts
            enabled: true
          -
            id: lkwifdyp
            title: Advocacy
            content:
              -
                type: paragraph
                content:
                  -
                    type: text
                    text: 'Representing you, we increase the chances of a positive outcome during proceedings.'
            type: touts
            enabled: true
        advanced_options:
          custom_css:
            code: |-
              selector section:before {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url(/assets/minis.jpeg);
                background-position: center center;
                background-size: cover;
                mix-blend-mode: multiply;
                filter: grayscale(100%);
                opacity: 0.5;
              }
            mode: css
  -
    type: set
    attrs:
      id: lkwnp6ms
      values:
        type: feature_list
        features:
          -
            id: lkwnp9gj
            record: 2e670dd1-ddb2-4bb1-8c83-25389861b6cc
            use_records: true
            type: feature
            enabled: true
          -
            id: lkwnpli2
            record: 5f3d7f6a-2845-431b-a470-1a3a4d4892fe
            use_records: true
            type: feature
            enabled: true
        use_records: true
        records:
          - 5ead9cc5-2224-4e04-8b9d-07b9075fac92
          - 5f3d7f6a-2845-431b-a470-1a3a4d4892fe
          - 1007ce7c-20f0-49ce-ada9-55fef395c58e
          - 750153ce-2fbf-4d6e-9be0-54bc47a84dfc
          - c3104a9e-94c9-4631-9bc1-79cdb1581f12
          - c8cb10ac-eaa0-4393-912d-8e8c48e613d3
          - cf6c3bb1-d42a-42e3-90ec-e6e97d3b5a5d
  -
    type: set
    attrs:
      id: lkwzlzhy
      values:
        type: homepage_shim
  -
    type: paragraph
    attrs:
      textAlign: left
---
