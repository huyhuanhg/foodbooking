class Ajax {

    constructor(objectRequest) {
        this.#request(objectRequest)
    }

    #request({method, url, header, params, data, success, failure, loading}) {
        var postData = new FormData();
        if (data) {
            for (var d in data) {
                postData.append(d, data[d]);
            }
        }

        if (params) {
            url += '?';
            for (let param in params) {
                url += param + '=' + params[param] + '&';
            }
            url = url.slice(0, url.length - 1);
        }

        var xhr = new XMLHttpRequest() || ActiveXObject();
        xhr.withCredentials = true;

        xhr.onreadystatechange = function () {
            // loading
            if (this.readyState !== 4 && loading) {
                loading();
            }
            //Kiem tra neu nhu da gui request thanh cong
            if (this.readyState === 4 && this.status === 200) {
                //In ra data nhan duoc
                try {
                    var responseData = JSON.parse(this.responseText);
                    if (responseData) {
                        success(responseData);
                    }
                } catch (e) {
                    success(this.responseText);
                }
            }
            //Kiem tra neu nhu da gui request thất bại
            if (this.readyState === 4 && this.status !== 200 && failure) {
                //In ra data nhan duoc
                failure(this.responseText);
            }
        }
        xhr.open(method, url, true);

        //cau hinh header cho request
        // xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        if (header) {
            for (let head in header) {
                xhr.setRequestHeader(head, header[head]);
            }
        }
        xhr.send(postData);
    }
}
