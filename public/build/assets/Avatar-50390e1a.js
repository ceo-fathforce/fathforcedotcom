import{h as d,c as i,r as e,o as p,j as u,k as _,e as s,f as h,b as m}from"./app-32ca278b.js";const v={class:"grid grid-cols-1 lg:grid-cols-3"},f={class:"lg:col-start-2 col-span-1"},g={},y=Object.assign(g,{__name:"Avatar",setup(b){const a=d(),t=i(()=>a.getters["auth/user/user"]("avatar")),o=async()=>{await a.dispatch("auth/user/fetch")},r=async()=>{await a.dispatch("auth/user/fetch")};return(c,w)=>{const n=e("ImageUpload"),l=e("ParentTransition");return p(),u(l,{appear:"",visibility:!0},{default:_(()=>[s("div",v,[s("div",f,[h(n,{design:"modern",shape:"circle",class:"h-64 w-64 rounded-full",label:c.$trans("user.avatar"),src:m(t),"upload-path":"user/profile/avatar","remove-path":"user/profile/avatar",onUploaded:o,onRemoved:r},null,8,["label","src"])])])]),_:1})}}});export{y as default};