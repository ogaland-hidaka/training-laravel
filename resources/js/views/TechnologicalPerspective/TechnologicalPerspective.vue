<template>
  <div>
    <div class="button">
      <a href=#>Button</a>
    </div>
    <div class="p_area">
      <p>java</p>
      <p>PHP</p>
      <p>VB</p>
      <p>C#</p>
      <p>javascript</p>
      <p>CSS</p>
    </div>
    <div id="img_area">画像を表示します</div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>

<style>
/* buttonスタイル */
.button {
      margin: 25px;
}
a {
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  background: #333;
  padding: 10px 30px;
  border-radius: 6px;
  transition: .3s;
}
/* ホバー */
a:hover{
    background: #13c3ac;
}
/* n番目 */
.p_area p:nth-child(4){
  font-weight:
  bold; color: navy;
}

/* 偶数 */
.p_area p:nth-child(even){
  font-weight: bold;
  color: rgb(10, 103, 3);
}

/* 奇数 */
.p_area p:nth-child(odd) {
  font-weight: bold;
  color: rgb(155, 7, 133);
}

/* 3の倍数 */
/* .p_area p:nth-child(3n){
  font-weight: bold; color: rgb(7, 128, 228);
} */

/* before */
p:before {
  content: '【before】';
  color: #e17d7d;
}

/* after */
p::after {
  content: '【after】';
  color: #f9a468d7;
}

#img_area {
  margin: 20px;
  font-size: 1.7em;
  max-width: 500px;
  text-align: center;
  margin: 20px auto;
  position: relative;
}
#img_area::before {
  content: '';
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpRlMgKTPAPaVhY5B4yqsJn4uAlaiBF6RoeCnC4fqZqvAxBgS48Y2bw0GI5w4__6QB6Ds&usqp=CAU');
  background-position: center;
  background-size: cover;
  position: absolute;
  top: 50px;
  left: 150px;
}
</style>
