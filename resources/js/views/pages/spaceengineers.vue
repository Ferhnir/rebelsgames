<template>
    <div>
        <div class="page_1st_lay">
            <div class="container-fluid">
                <div class="row justify-content-center d-flex align-items-center" style="height: 100vh;">
                    <div class="col-md-10">
                        <h1 style="color: #FFF;">
                            <strong>
                                <span>SPACE ENGINEERS</span>
                            </strong>
                            <br>
                            <span class="py-4">
                                <strong>
                                    <span>Survival Server 24/7</span>
                                </strong>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="pg-divider-1"></div>
        </div>
        <div class="page_2nd_lay">            
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10" style="text-align: center;">
                        <img id="page-logo-rg" src="/images/LogoRebels-2.png">
                        <h2 class="py-4">
                            <strong>
                                <span>{{ $t('welcome') }}</span>
                            </strong>
                        </h2>
                        <div class="header-div"></div>
                    </div>
                </div>
                <div class="row justify-content-center py-4">
                    <div class="col-md-6">
                        <b-card>
                            <b-media v-for="(el, index) in server_offer" :key="index">
                                <img class="media-img" slot="aside" src="/images/Logo-Rebels-64x64.png" alt="Media Aside" width="40px" height="40px" />
                                <h5>{{ $t(el.header) }}:</h5>
                                <p>
                                    {{ $t(el.text) }}
                                </p>
                            </b-media>
                        </b-card>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_3rd_lay">            
            <div class="pg-divider-2"></div>
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10" style="text-align: center;">
                        <h2>{{ $t('galaxy_map') }}</h2>
                        <h3>Omega</h3>
                        <b-img  v-b-modal.galaxymap-modal v-bind="mapImg" center src="/images/Map-image-Galaxies-4096x4096.png" alt="Center image" style="cursor: zoom-in;"/>
                    </div>
                </div>
                <div class="row justify-content-center py-4">
                    <div class="col-md-10" style="text-align: center;">
                        <h2>{{ $t('about') }}</h2>
                        <div class="header-div"></div>
                        <div class="row py-4">
                            <div class="col-lg-4" v-for="(card, index) in server_offer_detailed" :key="index">
                                <b-card>
                                    <b-card-header>
                                        <h4><i class="fas pr-2" v-bind:class="card.icon"></i>{{ $t(card.header) }}</h4>
                                    </b-card-header>
                                    <b-card-text>
                                        {{ $t(card.text) }}
                                        <p class="mt-2"></p>
                                        <p v-for="(el, elKey) in card.detail_list" :key="elKey">
                                            {{ $t(el) }}
                                        </p>
                                    </b-card-text>
                                </b-card>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-4" v-for="(img, imgKey) in server_offer_detailed_imgs" :key="imgKey">
                                <b-img center :src="img" alt="Center image" fluid/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="pg-divider-3"></div>
        </div>
        <div class="page_4th_lay">
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10" style="text-align: center;">
                        <h2>{{ $t('community')}} </h2>                        
                        <div class="header-div"></div>
                        <div class="row justify-content-center py-4">
                            <div class="col-md-10">
                                <iframe src="https://discordapp.com/widget?id=306529139479937025&theme=dark" width="350" height="370" allowtransparency="true" frameborder="0"></iframe>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_5th_lay">
            <div class="pg-divider-4"></div>
                <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10" style="text-align: center;">
                        <h2>{{ $t('start_play') }}</h2>
                        <b-button class="mt-4" size="lg" variant="light" href="https://space-engineers.com/server/112111/" target="_blank" style="border-radius: 25px;">
                            {{ $t('get_started') }}
                        </b-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <small>COPYRIGHT © 2015 - 2019 REBELS-GAMES.COM</small>
                    </div>
                </div>
            </div>           
        </div>   
        <b-modal 
            id="galaxymap-modal" 
            size="xl" 
            :header-bg-variant="headerBgVariant"
            :header-text-variant="headerTextVariant"
            :body-bg-variant="bodyBgVariant"
            :body-text-variant="bodyTextVariant"
            :footer-bg-variant="footerBgVariant"
            :footer-text-variant="footerTextVariant" 
            ok-only
            title="Galaxy map">
            <b-img v-bind="mapImgModal" center src="/images/Map-image-Galaxies-4096x4096.png" alt="Center image" />
        </b-modal>   
    </div>
</template>
<script>

export default {
    name: 'SpaceEngineersPage',
    data() {
        return {
            server_offer: [
                { header: "new_items_header", text: "new_items_text" }, 
                { header: "tiers_header", text: "tiers_text" }, 
                { header: "new_planets_header", text: "new_planets_text" }, 
                { header: "unique_header", text: "unique_text" }, 
            ],
            server_offer_detailed: [
                { 
                    header: "surv_and_fight", icon: "fa-sliders-h", text: "surv_and_fight_txt", detail_list: [
                        "surv_and_fight_list_1",
                        "surv_and_fight_list_2"
                    ]
                },
                { header: "balance", icon: "fa-cogs", text: "balance_txt"},
                { 
                    header: "mk_adv_blocks", icon: "fa-th-large", text: "mk_adv_blocks_txt", detail_list: [
                        "mk_adv_blocks_list_1",
                        "mk_adv_blocks_list_2"
                    ]
                }
            ],
            server_offer_detailed_imgs: [
                "/images/Vanilla.png",
                "/images/mk.png",
                "/images/23456y7u.png"
            ],
            mapImg: {
                width: 350,
                height: 350
            },
            mapImgModal: {
                width: '1024',
                height: '1024'
            },            
            headerBgVariant: 'dark',
            headerTextVariant: 'light',
            bodyBgVariant: 'light',
            bodyTextVariant: 'dark',
            footerBgVariant: 'dark',
            footerTextVariant: 'light'
        }
    }
}
</script>
<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    h1 {
        font-family: Aldrich;
    }

    .page_1st_lay {
        background-repeat: space;
        background-blend-mode: color-dodge;
        background-image: url('/images/Steam_background2.png') !important;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        z-index: 0;
        text-align: center;
    }

    .page_2nd_lay {
        background-color: #E5E5E5;
        color: rgba(36, 36, 36, 1);
        font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif;
    }

    .page_3rd_lay {
        background-color: #323537;
        color: #fff;
    }

    .page_4th_lay {
        background-color: #212121;
        color: #fff;
    }

    .page_5th_lay {
        background-color: #0E2E3E;
        color: #fff;
    }

    h1 > * {
        text-shadow: rgba(0, 0, 0, 0.4) 0em 0.08em 0.01em;
        font-size: 200%;
    }

    h5 {
        font-weight: bold;
    }

    @media (max-width: 1199.98px) { 
        h1 > * {
            font-size: 130%;
        }
    }

    @media (max-width: 767.98px) { 
        h1 > * {
            font-size: 70%;
        }
    }

    .pg-divider-1 {
        display: block;
        position: absolute;
        bottom: 0px;
        left: 0px;
        right: 0px;
        width: 100%;
        pointer-events: none;
        transform: rotateX(180deg);
    }

    .pg-divider-1 {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI0NHB4IiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2U1ZTVlNSI+PHBhdGggZD0iTTAgOTAuNzJsMTQwLTI4LjI4IDMxNS41MiAyNC4xNEw3OTYuNDggNjUuOCAxMTQwIDEwNC44OWwxNDAtMTQuMTdWMEgwdjkwLjcyeiIgZmlsbC1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0wIDB2NDcuNDRMMTcwIDBsNjI2LjQ4IDk0Ljg5TDExMTAgODcuMTFsMTcwLTM5LjY3VjBIMHoiLz48L2c+PC9zdmc+);
        background-size: 100% 44px;
        height: 44px;
    }

    .pg-divider-2 {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxNjNweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNlNWU1ZTUiPjxwYXRoIGQ9Ik0wIDkwLjcybDE0MC0yOC4yOCAzMTUuNTIgMjQuMTRMNzk2LjQ4IDY1LjggMTE0MCAxMDQuODlsMTQwLTE0LjE3VjBIMHY5MC43MnoiIGZpbGwtb3BhY2l0eT0iLjUiLz48cGF0aCBkPSJNMCAwdjQ3LjQ0TDE3MCAwbDYyNi40OCA5NC44OUwxMTEwIDg3LjExbDE3MC0zOS42N1YwSDB6Ii8+PC9nPjwvc3ZnPg==);
        background-color: #323537;
        background-size: 100% 163px;
        height: 163px;
    }

    .pg-divider-3 {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIyMDBweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiMyMTIxMjEiPjxwYXRoIGQ9Ik0wIDcwLjM1bDMyMC00OS4yNCA2NDAgOTguNDkgMzIwLTQ5LjI1VjE0MEgwVjcwLjM1eiIvPjwvZz48L3N2Zz4=);
        background-size: 100% 200px;
        height: 200px;
        z-index: 1;
    }

    .pg-divider-4 {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSI0NnB4IiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzIxMjEyMSI+PHBhdGggZD0iTTEyODAgMEw2NDAgNzAgMCAwdjE0MGw2NDAtNzAgNjQwIDcwVjB6IiBmaWxsLW9wYWNpdHk9Ii41Ii8+PHBhdGggZD0iTTEyODAgMEgwbDY0MCA3MCA2NDAtNzB6Ii8+PC9nPjwvc3ZnPg==);
        background-size: 100% 46px;
        top: 0;
        height: 46px;
        z-index: 1;
        transform: rotateY(180deg);
        background-color: #0E2E3E;
    }

    #page-logo-rg {
        background-color:0 0;
        filter: brightness(15%);
        margin: 0 auto 0 auto;
        width: 152px; 
        height: 166px;
        /* border: #000; */
    }

    .card {
        text-align: left;
        background-color: rgba(0,0,0,0) !important;
        border: none !important;
    }

    .card-header:first-child {
        border: none !important;
        background: none !important;
    }

    .media-img {
        filter: brightness(15%);
    }

    .header-div {
        padding-top: 10px;
        display: inline-block;
        position: relative;
        width: 100%;
    }

    .header-div:before {
        content : "";
        position: absolute;
        left: 49%;
        bottom: 0;
        height: 1px;
        width: 20px;
        border-top: 5px solid #0C71C3;
    }

    .footer {
        background-color: #181818;
        height: 50px;
        padding: 15px;
        color: grey;
    }
</style>
