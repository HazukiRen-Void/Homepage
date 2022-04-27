<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/recruit.css">
    <title>OPLAN | お問い合わせ</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="mb-8">
            <h1 class="section-title">CONTACT</h1>
            <p class="text-p">お問い合わせ</p>
        </div>
        <section class="mb-10">
            <div class="section-contents">
                <div class="p-10">
                    <h3 class="mb-5">ご契約の流れ</h3>
                    <div class="py-6">
                        <div class="w6">
                            <div class="w-1"></div>
                        </div>
                        <div class="z-10">1</div>
                        <div class="pl-6">
                            <div class="h24">
                                <img src="images/flow-1.png" alt="お問い合わせ">
                            </div>
                            <div class="t-3">
                                <h2 class="tm-1">STEP 1</h2>
                                <p class="leading-relaxed">お問い合わせ</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <div class="w6">
                            <div class="w-1"></div>
                        </div>
                        <div class="z-10">2</div>
                        <div class="pl-6">
                            <div class="h24">
                                <img src="images/flow-2.png" alt="営業担当者がお伺いし、業務内容の確認をし必要工数などを算出いたします。">
                            </div>
                            <div class="t-3">
                                <h2 class="tm-1">STEP 2</h2>
                                <p class="leading-relaxed">営業担当者がお伺いし、業務内容の確認をし必要工数などを算出いたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <div class="w6">
                            <div class="w-1"></div>
                        </div>
                        <div class="z-10">3</div>
                        <div class="pl-6">
                            <div class="h24">
                                <img src="images/flow-3.png" alt="社内メンバーから最適なチームを選任いたします。">
                            </div>
                            <div class="t-3">
                                <h2 class="tm-1">STEP 3</h2>
                                <p class="leading-relaxed">社内メンバーから最適なチームを選任いたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <div class="w6">
                            <div class="w-1"></div>
                        </div>
                        <div class="z-10">4</div>
                        <div class="pl-6">
                            <div class="h24">
                                <img src="images/flow-4.png" alt="ご契約後、実際の業務を遂行し納品までフォロー致します。">
                            </div>
                            <div class="t-3">
                                <h2 class="tm-1">STEP 4</h2>
                                <p class="leading-relaxed">ご契約後、実際の業務を遂行し納品までフォロー致します。</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <div class="w6">
                            <div class="w-1"></div>
                        </div>
                        <div class="z-10">5</div>
                        <div class="pl-6">
                            <div class="h24">
                                <img src="images/flow-5.png" alt="納品後についても保守運用など必要に応じてフォローさせて頂きます。">
                            </div>
                            <div class="t-3">
                                <h2 class="tm-1">STEP 5</h2>
                                <p class="leading-relaxed">納品後についても保守運用など必要に応じてフォローさせて頂きます。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <form class="sm:max-w-4xl mx-auto flex flex-col space-y-8" method="post" action="thanks.php">
                <div class="border-b-2 border-black flex flex-wrap justify-between sm:pb-2 pb-8 items-center">
                    <label for="customerName" class="block py-5 w-full sm:w-3/12 sm:mb-0 mb-3">
                        <span class="bg-red-400 px-2 py-1 rounded text-white text-xs">必須</span>
                        <span class="inline-block ml-3">お名前</span>
                    </label>
                    <div class="w-full sm:w-9/12 p-3 relative" style="min-height:auto">
                        <input type="text" class="p-5 outline-none border-black border-dotted border-0 focus:border-2 absolute top-1/2 right-0 left-0 w-full transform -translate-y-1/2" id="customerName" name="customerName" placeholder="オープラン株式会社" required="">
                    </div>
                </div>
                <div class="border-b-2 border-black flex flex-wrap justify-between sm:pb-2 pb-8 items-center">
                    <label for="customerTel" class="block py-5 w-full sm:w-3/12 sm:mb-0 mb-3">
                        <span class="bg-gray-500 px-2 py-1 rounded text-white text-xs">任意</span>
                        <span class="inline-block ml-3">電話番号</span>
                    </label>
                    <div class="w-full sm:w-9/12 p-3 relative" style="min-height:auto">
                        <input type="tel" class="p-5 outline-none border-black border-dotted border-0 focus:border-2 absolute top-1/2 right-0 left-0 w-full transform -translate-y-1/2" id="customerTel" name="customerTell" placeholder="03-5829-4906">
                    </div>
                </div>
                <div class="border-b-2 border-black flex flex-wrap justify-between sm:pb-2 pb-8 items-center">
                    <label for="customerEmail" class="block py-5 w-full sm:w-3/12 sm:mb-0 mb-3">
                        <span class="bg-red-400 px-2 py-1 rounded text-white text-xs">必須</span>
                        <span class="inline-block ml-3">メールアドレス</span>
                    </label>
                    <div class="w-full sm:w-9/12 p-3 relative" style="min-height:auto">
                        <input type="email" class="p-5 outline-none border-black border-dotted border-0 focus:border-2 absolute top-1/2 right-0 left-0 w-full transform -translate-y-1/2" id="customerEmail" name="customerEmail" placeholder="〇〇@〇〇.〇〇" required="">
                    </div>
                </div>
                <div class="border-b-2 border-black flex flex-wrap justify-between sm:pb-2 pb-8 items-center">
                    <label for="subject" class="block py-5 w-full sm:w-3/12 sm:mb-0 mb-3">
                        <span class="bg-red-400 px-2 py-1 rounded text-white text-xs">必須</span>
                        <span class="inline-block ml-3">件名</span>
                    </label>
                    <div class="w-full sm:w-9/12 p-3 relative" style="min-height:auto">
                        <select class="p-5 outline-none border-black border-dotted border-0 focus:border-2 absolute top-1/2 right-0 left-0 w-full transform -translate-y-1/2" id="subject" name="subject" required="">
                            <option value="" hidden="">選択してください</option>
                            <option value="サービスに関するお問い合わせ">サービスに関するお問い合わせ</option>
                            <option value="採用に関するお問い合わせ">採用に関するお問い合わせ</option>
                            <option value="取材依頼に関するお問い合わせ">取材依頼に関するお問い合わせ</option>
                            <option value="個人情報保護に関するお問い合わせ">個人情報保護に関するお問い合わせ</option>
                            <option value="その他のお問い合わせ">その他のお問い合わせ</option>
                        </select>
                    </div>
                </div>
                <div class="border-b-2 border-black flex flex-wrap justify-between sm:pb-2 pb-8 items-start">
                    <label for="message" class="block py-5 w-full sm:w-3/12 sm:mb-0 mb-3">
                        <span class="bg-red-400 px-2 py-1 rounded text-white text-xs">必須</span>
                        <span class="inline-block ml-3">内容</span>
                    </label>
                    <div class="w-full sm:w-9/12 p-3 relative" style="min-height:283px">
                        <textarea class="p-5 outline-none border-black border-dotted border-0 focus:border-2 absolute top-0 right-0 left-0 w-full h-full" id="message" name="message" placeholder="お問い合わせ内容を入力して下さい。" required="" rows="10"></textarea>
                    </div>
                </div>
                <div class="text-center my-8">
                        <label for="privacyPolicyChecked">
                            <input type="checkbox" class="mr-2" name="privacyPolicyChecked" id="privacyPolicyChecked" required="">
                            <span>
                                <a target="_blank" class="text-blue-500 hover:text-blue-600" href="/privacy-policy">プライバシーポリシー</a>
                                に同意する
                            </span>
                        </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="rounded-full w-full sm:max-w-lg mx-auto py-5 bg-blue-800 hover:bg-blue-900 px-3 text-lg text-white disabled:cursor-not-allowed disabled:bg-blue-600" name="btn_confirm">
                        送信
                    </button>
                </div>
            </form>
    </div>

</body>
</html>
