import{m as g,h,A as _,r,o as m,j as f,k as o,f as n,v as i,x as u,b}from"./app-32ca278b.js";const y={__name:"403",setup(B){const s=g(),d=h(),l=_.useLoading({}),p=async()=>{let t=l.show();await d.dispatch("auth/user/logout",{}).then(()=>{t.hide(),s.push({name:"Login"})}).catch(e=>{t.hide()})};return(t,e)=>{const a=r("BaseButton"),c=r("ErrorPage");return m(),f(c,{type:"403",title:t.$trans("general.errors.403_title"),description:t.$trans("general.errors.403_description")},{default:o(()=>[n(a,{type:"button",onClick:e[0]||(e[0]=$=>b(s).push({name:"Dashboard"}))},{default:o(()=>[i(u(t.$trans("dashboard.dashboard")),1)]),_:1}),n(a,{design:"danger",type:"button",onClick:p},{default:o(()=>[i(u(t.$trans("auth.login.logout")),1)]),_:1})]),_:1},8,["title","description"])}}};export{y as default};