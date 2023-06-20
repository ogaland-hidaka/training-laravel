export const Utils = {
    logging: (data) => {},

    /**
     * 指定のオブジェクトから、指定のパスまで掘り下げて値を取得する
     *
     * @param {*} object オブジェクト
     * @param {string} path パスの文字列。引数 object のトップレベルプロパティから
     *                      ピリオド区切りで記す。配列の添字もピリオドで記す。
     *                      ex. 'items.0.options.name'
     * @return {*} 連想配列の値。取得できなかった場合は undefined が返される
     */
    getExistKey: (object, path) => {
        let lookup = Object.assign({}, object);
        const keys = `${path}`.split(".");
        const length = keys.length;
        for (let index = 0; index < length; index++) {
            if (lookup[keys[index]] == null) {
                return index === length - 1 ? lookup[keys[index]] : undefined;
            }
            lookup = lookup[keys[index]];
        }
        return lookup;
    },

    /**
     * オブジェクトが空か判定
     * @param {*} object オブジェクト
     * @returns boolean
     */
    isObjectEmpty: (object) => {
        return !Object.keys(object).length;
    },

    /**
     * 複数の特定要素のうちひとつでも当てはまったら true を返す関数
     *
     * @param array arr 比較元の配列
     * @param string target 要素内の文字列　この文字列を配列内に1つでも含んでいる要素があるか判定
     * @returns boolean
     */
    isIncludes : (arr, target) => {
        return arr.some(el => target.includes(el))
    },

    /**
     * オブジェクトの比較
     * @param {*} a
     * @param {*} b
     * @returns
     */
    isObjectEquals: (a, b) => {

        if(a === b){
            // 同一インスタンスならtrueを返す
            return true;
        }

        // 比較対象双方のキー配列を取得する（順番保証のためソートをかける）
        const aKeys = Object.keys(a).sort();
        const bKeys = Object.keys(b).sort();

        // 比較対象同士のキー配列を比較する
        if(aKeys.toString() !== bKeys.toString()){
            // キーが違う場合はfalse
            return false;
        }

        // 値をすべて調べる。
        const wrongIndex = aKeys.findIndex(function(value){
            // 注意！これは等価演算子で正常に比較できるもののみを対象としています。
            // つまり、ネストされたObjectやArrayなどには対応していないことに注意してください。
            return a[value] !== b[value];
        });

        // 合致しないvalueがなければ、trueを返す。
        return wrongIndex === -1;
    }
};