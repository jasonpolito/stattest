---
id: cba55521-c30e-441a-8e88-2eac9f240a2b
blueprint: location
title: 'Daytona Beach'
related_doctors:
  - 3941a575-5a85-4e38-a55b-5b5717c3cfe9
  - 8c0b5575-556d-49ec-b2db-d5dc522c20ed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1689805294
template: page
content:
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: sdffsddfs
  -
    type: set
    attrs:
      id: lkaa9ma3
      values:
        type: code
        code:
          code: |-
            <ul>
                {{ related_doctors }}
                    <li><a href="{{ url }}">{{ title }}</a></li>
                {{ /related_doctors }}
            </ul>
          mode: htmlmixed
  -
    type: paragraph
    attrs:
      textAlign: left
---
