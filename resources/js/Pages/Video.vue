

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue'
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue'
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue'
import RecommendedVideos from '@/Components/RecommendedVideos.vue';

defineProps({
    video: Object,
    comments: Array,
    recommendedVideos: Array
})
</script>

<template>

    <Head title="Youtube" />
    <NavLayout>
        <div class=" xl:flex">
            <div class=" p-3">
                <video :src="video.video || ''" controls autoplay />
                <div class=" text-white text-2xl mt-4 font-extrabold">{{ video.title }}</div>
                <div class=" flex items-center mb-4">
                    <img class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                        :src="`http://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''">
                    <div class="pl-2mt-1">

                        <p class="text-lg text-white font-extrabold flex items-center">{{ video.user }}
                            <CheckCircle fillColor="#888888" :size="17" />
                        </p>
                        <div class="text-sm text-gray-400 font-extrabold  ">{{ video.views }}</div>
                    </div>
                </div>
                <div class=" bg-[#3f3f3f] rounded-lg w-full text-white p-3">
                    <div class=" text-white text-lg font-extrabold">
                        {{ video.views }}
                    </div>
                    <div class=" w-[500px] p-3 block sm:hidden">
                        <div v-for="vid in recommendedVideos" :key="vid">
                            <Link :href="route('videos.show', { id: vid.id })" class=" flex mb-3">
                            <RecommendedVideos :vid="vid" />
                            </Link>

                        </div>
                    </div>
                    <div class=" text-sm font-extrabold mb-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class=" text-sm font-extrabold mb-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorem aliquam accusantium iste
                        perspiciatis illum quaerat doloremque maxime quibusdam, pariatur quod cum quia excepturi
                        sapiente distinctio fugiat harum! Minima, deserunt.
                    </div>
                </div>
                <div class="mt-6">
                    <div class=" text-white text-lg font-extrabold">
                        {{ comments.length }}
                    </div>

                    <div v-for="comment in comments" :key="comment
                    ">
                        <div class=" flex items-flex mb-4 mt-2">
                            <img class="rounded-full mt-2 w-12 h-12"
                                :src="`http://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''">
                            <div class=" pl-6 mt-1">
                                <div class=" text-white font-extrabold flex items-baseline">
                                    <div>{{ comment.user }}</div>
                                    <div class=" text-gray-400 pl-3">
                                        {{ comment.time }}
                                    </div>
                                </div>
                                <div class=" text-gray-300 text-sm font-semibold">
                                    {{ comment.text }}
                                </div>
                                <div class=" mt-4 items-center flex">
                                    <ThumbUpOutline fillColor="#ffffff" :size="20" class=" pr-2" />
                                    <div class=" text-gray-400 text-sm font-extrabold pr-10">
                                        {{ (Math.random() * 100).toFixed(0) }}
                                    </div>
                                    <ThumbDownOutline fillColor="#ffffff" :size="20" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" w-[500px] p-3 sm:block hidden">
                <div v-for="vid in recommendedVideos" :key="vid">
                    <Link :href="route('videos.show', { id: vid.id })" class=" flex mb-3">
                    <RecommendedVideos :vid="vid" />
                    </Link>

                </div>
            </div>
        </div>
    </NavLayout>
</template>

<style lang="scss" scoped>

</style>