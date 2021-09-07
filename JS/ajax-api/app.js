$(function () {

    // 検索ボタンがクリックされた時に実行
    $('#search_btn').click(function () {
        // 入力欄に入力された値をzipcodeという変数に入れる
        let zipcode = $('#zipcode').val();
        // urlを設定
        let url = "https://zipcloud.ibsnet.co.jp/api/search";
        // 送るデータを成形する
        let param = { zipcode: zipcode }; //{zipcode : 1234567}
        //  サーバーと通信(Ajax)
        // $.ajax().success().error().complete();←古い書き方
        $.ajax({
            type: "GET", //多いのはPOST
            cache: false,
            url: url,
            data: param,
            dataType: "jsonp"
        })
            .done(function (res) {
                if (res.status != 200) {
                    $('#zip_result').html(res.message);
                } else {
                    console.log(res);
                    let html = '';
                    for (let i = 0; i < res.results.length; i++) {
                        let result = res.results[i];
                        html += '<h2>住所'+(i+1)+'</h2>'; // html = html + '<h2>…</h2>'　と同じ
                        html += '<div>都道府県コード：' + result.prefcode + '</div>';
                        html += '<div>都道府県：' + result.address1 + '</div>';
                        html += '<div>市区町村：' + result.address2 + '</div>';
                        html += '<div>町域：' + result.address3 + '</div>';
                        html += '<div>都道府県（カナ）：' + result.kana1 + '</div>';
                        html += '<div>市区町村（カナ）：' + result.kana2 + '</div>';
                        html += '<div>町域（カナ）：' + result.kana3 + '</div>';
                    }
                    $('#zip_result').html(html);
                }
            })
            .fail(function () {
                $('#zip_result').html("通信エラーです。時間をおいてお試しください。")
            });
    });

});