<ul class="list-unstyled text-light mt-2">
                    <li class="d-inline-block border border-light rounded-pill mt-2 px-3 py-1">
                        <a href="<?=get_link('/')?>" class="text-decoration-none text-white">
                            <?=lang('Ana Sayfa')?>
                        </a>
                    </li>
                    <li class="d-inline-block  border border-light rounded-pill mt-2 ml-2 px-3 py-1">
                        <a href="<?=get_link('/sessions.php')?>" class="text-decoration-none text-white">
                            <?=lang('Seanslar')?>
                        </a>
                    </li>
                    <li class="d-inline-block border border-light rounded-pill mt-2  ml-2  px-3 py-1">
                        <a href="<?=get_link('/articles.php')?>" class="text-decoration-none text-white">
                            <?=lang('Makaleler')?>
                        </a>
                    </li>
                    <li class="d-inline-block border border-light rounded-pill mt-2  ml-2  px-3 py-1">
                        <a href="<?=get_link('/services.php')?>" class="text-decoration-none text-white">
                            <?=lang('Hizmetlerimiz')?>
                        </a>
                    </li>
                    <li class="d-inline-block ml-2 ">
                        <div class="btn-group">
                            <button type="button"
                                    class="btn border border-light rounded-pill py-1 text-light btn-transparent dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=lang('Medya')?>
                            </button>
                            <div style="opacity: 0.9;" class="mt-2 dropdown-menu dropdown-menu-right">
                                <a href="<?=get_link('/fromyou.php')?>" class="dropdown-item text-decoration-none ">
                                    <?=lang('Hastalarımızın Dilinden')?>
                                </a>
                                <a href="<?=get_link('/media.php')?>" class="dropdown-item text-decoration-none">
                                    <?=lang('Basında biz')?>
                                </a>
                            </div>
                        </div>

                    </li>
                    <li class="d-inline-block border border-light rounded-pill mt-2  ml-2    px-3 py-1">
                        <a href="<?=get_link('/about.php')?>" class="text-decoration-none text-white">
                            <?=lang('Hakkında')?>
                        </a>
                    </li>
                     <li class="d-inline-block border border-light rounded-pill mt-2  ml-2    px-3 py-1">
                         <a href="<?=get_link('/contact.php')?>" class="text-decoration-none text-white">
                             <?=lang('Iletişim')?>
                         </a>
                     </li>
                    <li class="d-inline-block mt-2  ml-1">
                        <a href="<?=get_flag($actual_link, 'tr')?>" class="text-decoration-none text-white">
                            <img width="26px" src="/assets/icons8-turkey-96.png"/>
                        </a>
                    </li>
                    <li class="d-inline-block mt-2 ml-1">
                        <a href="<?=get_flag($actual_link, 'en')?>" class="text-decoration-none text-white">
                            <img width="26px" src="/assets/icons8-great-britain-96.png">
                        </a>
                    </li>
                </ul>