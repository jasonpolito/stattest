---
id: 7b6f5042-992c-4406-b0a3-f310ebdefaac
blueprint: block
title: Hero
markup:
  code: |-
    {{ if use_custom_html }}
        {{ custom_html }}
    {{ else }}
        <x-section class="block--hero">
            <x-container>
                <div class="flex items-center">
                    <div class="w-full md:w-1/2 md:pr-16">
                        <h1 class="mb-8 text-4xl font-bold md:text-5xl lg:text-6xl">{{ title }}</h1>
                        <div class="text-lg font-light text-gray-700">
                            {{ content }}
                        </div>
                        {{ if buttons }}
                            <div class="pt-8"></div>
                        {{ /if }}
                        {{ buttons }}
                            <x-btn url="{url}" style="{style.value}">
                                {{ text }}
                                {{ if icon }}
                                    <x-slot:icon>
                                        {{ icon }}
                                    </x-slot:icon>
                                {{ /if }}
                            </x-btn>
                        {{ /buttons }}
                    </div>
                    <div class="w-full md:w-1/2">
                        <img src="{{ image:url }}" alt="">
                    </div>
                </div>
            </x-container>
        </x-section>
    {{ /if }}
  mode: htmlmixed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1690489102
handle: hero
---
