---
id: 7b6f5042-992c-4406-b0a3-f310ebdefaac
blueprint: block
title: Hero
markup:
  code: |-
    {{ partial:block }}
        <x-section class="block--hero">
            <x-container>
                <div class="flex items-center">
                    <div class="w-full md:w-1/2 md:pr-16">
                        <h1 class="mb-8 text-4xl font-bold md:text-5xl lg:text-6xl">{{ title }}</h1>
                        <div class="text-lg font-light text-gray-700">
                            {{ content }}
                        </div>
                        {{ partial:partials/buttons }}
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="-mt-8 -ml-8 fill-parent bg-primary-50"></div>
                        <img src="{{ image:url }}" alt="{{ image:alt }}">
                    </div>
                </div>
            </x-container>
        </x-section>
    {{ /partial:block }}
  mode: htmlmixed
updated_by: 2d2d6685-b06b-4c36-ac61-bb3b0bd2b14f
updated_at: 1690491354
handle: hero
---
