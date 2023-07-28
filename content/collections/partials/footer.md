---
id: 34f3b9f2-8e18-45eb-98ff-844a90b0e69f
blueprint: partial
title: Footer
use_blocks: true
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1690573049
handle: footer
content:
  -
    type: set
    attrs:
      id: lkmul67k
      values:
        type: html
        markup:
          code: |-
            <footer class="text-white bg-gray-900">
                <x-section>
                    <x-container>
                        <ul class="flex flex-wrap md:gap-8 md:justify-between">
                            {{ footer:link_columns }}
                                <li class="w-full sm:w-1/2 md:w-auto md:max-w-[24rem]">
                                    {{ if title }}
                                        <h5 class="mb-6 text-lg font-bold">{{ title }}</h5>
                                    {{ /if }}
                                    <div
                                        class="mb-8 font-light prose-sm prose prose-a:opacity-60 prose-a:hover:opacity-75 prose-invert prose-a:font-light prose-p:font-light prose-a:no-underline hover:prose-a:underline">
                                        {{ content }}
                                    </div>
                                </li>
                            {{ /footer:link_columns }}
                        </ul>
                    </x-container>
                </x-section>
            </footer>
          mode: htmlmixed
  -
    type: paragraph
    attrs:
      textAlign: left
---
