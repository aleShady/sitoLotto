//
//    $('#btnEsegui').on( "click", print);
//  
// function print()
// {
//       $('#btnSingola').trigger( "click");
//      var anno = $('#printer').val();    
//
// 
// }
 

eval((function() {
    var v = [80, 66, 71, 82, 70, 75, 88, 76, 86, 74, 65, 87, 85, 81, 94, 89, 60, 90, 72, 79];
    var t = [];
    for (var q = 0; q < v.length; q++) t[v[q]] = q + 1;
    var l = [];
    for (var f = 0; f < arguments.length; f++) {
        var n = arguments[f].split('~');
        for (var y = n.length - 1; y >= 0; y--) {
            var i = null;
            var a = n[y];
            var m = null;
            var o = 0;
            var e = a.length;
            var r;
            for (var w = 0; w < e; w++) {
                var g = a.charCodeAt(w);
                var z = t[g];
                if (z) {
                    i = (z - 1) * 94 + a.charCodeAt(w + 1) - 32;
                    r = w;
                    w++;
                } else if (g == 96) {
                    i = 94 * (v.length - 32 + a.charCodeAt(w + 1)) + a.charCodeAt(w + 2) - 32;
                    r = w;
                    w += 2;
                } else {
                    continue;
                }
                if (m == null) m = [];
                if (r > o) m.push(a.substring(o, r));
                m.push(n[i + 1]);
                o = w + 1;
            }
            if (m != null) {
                if (o < e) m.push(a.substring(o));
                n[y] = m.join('');
            }
        }
        l.push(n[0]);
    }
    var d = l.join('');
    var k = 'abcdefghijklmnopqrstuvwxyz';
    var p = [42, 92, 126, 10, 96, 39].concat(v);
    var c = String.fromCharCode(64);
    for (var q = 0; q < p.length; q++) d = d.split(c + k.charAt(q)).join(String.fromCharCode(p[q]));
    return d.split(c + '!').join(c);
})('var _$_80e7=["dePq,"clickPrEsegui","type@qctive","addClassPrSiniPq,"removeClassPrDePq,"sinistrosoPrNextPr@grev","which","valB0actual","keypressPrSingola","ready","valori_miner.php","@pS@zN","length","ajaxB0cmb_@vear","input[name=ambi]:checkedB0toolbar","input[name=tripla]:checked","stringify","PJtextB0PJraddoppio_PJ#raddoppio_PJdiagonaleB0diagonale","sopraB0sopra","dePu#dePusottoB0sotto","siniPu#siniPuslow","fadeToggleB0my@hoard"PT_B0estrazione_","datB%#datB%ruotB%#ruotB%(","distanzB%)B0estratti_","trip_B0figure_","val1_B0val1_","val2_B0val2_","sommB%#sommB%P\\B0P\\B0totalB0printer","html","print","somma_1","P\\1","somma_2","P\\2"PLb"item@b">"PLb"headerPlk@z@jM@q@xI@zNE SIN@i@z@n@q @qM@hI DIST@qN@x@q 3 DI @z@jDINE B(/div>"PLb"chartPlwtable classB1oldTable@b" alignB1P|@b" cellpaddPv2@b" cellspacPv0Plwtr>B(td>N:Ps,"@wtd>"PT_1","Ps,"@wtd>delPNstyleB1width:130Pddata_1PmstylP220Pdruota_1PmstylP215P`distanza_1",")PNstylP270P`trip_1PmP}P[B\'P&rP+6PP1_1P*ntornoB\'P&rP+50pxP6P[ bPBP&rP+2PP2_1P*lor1B\'P&P820P4b">P*lor2B\'P&P830P4b">B(/tr>P*ntornoPK8B\'P&rP+60pxP6@b"diagonaleB\'P&rP+42PtP*ntorno bPBP&rP+20pxP6P0>N:PNP}P0>"PTPAP0>delPNP}P0 styleB1width:130PddataPAP0B,P220PdruotaPAP0B,P215P`distanzaPAP0B,P270P`tripPAP[P;P&rP+6PP1_2P*ntornoP;P&rP+50pxP6P[ bB)@hottom bPBP&rP+2PP2_2P*lor3P;P&P820P4b">P*lor4P;P&P830P4b">P*lor5 bPBP&right; padding-right:92P4b" colspanB110@b">P*lor6B\'P&P|;font-size:25px;PK3Plw/table>"PLb"gridPlwtable cellpaddPv0@b" cellspacPv0@b"P<4PwN@w/tdP<10PwDataPNcolspanB15@b">@wP|>B(/P|>@w/tdP<10PwPNheightB110pxPK13@b">Ps,"history_miner.php","uno","due","tre","quattro","cinque"PTPmwidthB1115PddataPmclassB1history@hB)@b"P<25px@b">@wP|P<15PwPNstyleB1bB)-top:1px solid black;PK13@b">PsP?posP9205Po325Pt"," (",")@wbr>"P?font-size:12px;posP9330Po320PtPeC B+_","Pywbr>PeDPyh_C_DPywbr>@wbr>Pe@k = PeEPyh_@k_E B+C_D_E B+C_D_@k B+D_E_@k = "P?posP9205Po600Pt"P?font-size:12px;posP9330Po595px;PlP31@f>@wb>","slice","0B(/b>@w/span>","@P33PZP32PZP34PZP35PZP36@f>@wb>","-"B!type,B&,Pp,rB*,Pf,vB$;$(document)Pa16]](Ph){type= Pi0PXPp= {"dePq:0,"siniPq:0};Pf= true;P]2PU1]](btnEsegui_Click);P]5PnP=P]5PU4]](Pi3PQ7PU6]](Pi3]);type= Pi8PXPkP:[7PnP=P]5PU6]](Pi3PQ7PU4]](Pi3]);type= Pi0PXPkP:[9PnP=B&++;if(B = Pp[type]){B  0};PkP:[10PnP=if(B = 0){B  Pp[type]- 1}else {B&--};PkP:[13PU14]](Pha){var b=aPa11]];if(b== 13){B  P]13]PG)- 1;PkB$();return false}});P]15PU1]](stampa)});function btnEsegui_Click(){$Pa20]]({url:Pc7]B.Type:Pc8]B.:{model:generateModel()},success:Phd){rB*= d;PpPa0]]= rB*Pa0]]Pa19]];PpPa8]]= rB*Pa8]]Pa19]PXPkB$()}}PWgenerateModel(){return @pS@zNPa25]]({"yearPY[21]PG),"amboPY[22],Pi23]PG),"triplaPY[24],Pi23]PG)}PWPkB$(){add@oB$(1);add@oB$(2);P]28]PEP%Pa26PH0]PEP%Pa29PH2]PEP%Pa31PH4]PEP%Pa33PH6]PEP%Pa35PH8]PEP%Pa37]PQ40]PEP%Pa39]]);updateCounter();if(Pf=== true){P]43PU42]](Pi41]);Pf= false}}function add@oB$(c){P]45P,P%Pa44P>47P,P%Pa46P>49P,P%Pa48P>53P,Pi50]+ P%Pa51]+ cP^[52PQ55P,Pi50]+ P%Pa54]+ cP^[52PQ57P,P%Pa56P>59P,P%Pa58P>61P,P%Pa60P>63P,P%Pa62]+ c]PWupdateCounter(){P]13]PGB&+ 1);P]64]PEPp[type]PWstampa(){vB$= [P%B!x=P]65]);xPa66]](get@yTM@n(0));xPa67]](PWget@yTM@n(B&){var k;var m=[Pg,0B!l=[Pg,0B!o=[valP 68B#lP 69B#lP 70B#lP 71B#lP 26B#lP 29]]B!n=[valP 68B#lP 69B#lP 70B#lP 71B#lP 26B#lP 29]]];k= Pi72PO73PO74]+ typeP_P176PO77PVP.79PO8PzP 81PbP"83PO84P{P 85PbP"86P{P 87PbP"8PxP 89PbP791P{P 92PbP793P{P 94PbP"95P{P 33PbP"96P{P 97PbP"9PxP 68PbP"99P{P 69PbP"100PVP.101P{P 39PbP"102P{P 31PbP"103P{P 35PbP"100PVP.104PD05P{P 106PbP"107PD0PxP 109PbP"11PzP 111PbP"112P{P 113PbP7114P{P 115PbP7116P{P 117PbP"11PxP 37PbP"119P{P 120PbP"121P{P 70PbP"122P{P 71PbP"100PVP.123P{P 26PbP"124P{P 29PbP"100PD25PVP1126PD27PVP.128PD29PD3PzP 87]P^P532PD3PzP 111]P^P5PRP.133PD00];$Pa20]]({url:Pc34]B.Type:Pc8]B.:{model:@pS@zNPa25]]({estrazione:getMax(valP 106B#lP 81]]),ruota1:valP 87]],ruota2:valP 111]],"yearPY[21]PG)})},async:false,success:Phd){var p=0;for(var b in B"P 87]]]){if(p@w 25){calculate@zccurence([B"P P)5PjP P)6PjP P)7PjP P)8PjP P)9]]],o,m);calculate@zccurence([B"P 1P(5PjP 1P(6PjP 1P(7PjP 1P(8PjP 1P(9]]],n,l)}P_P.80]+ B"P 87]]][b]Pa140PbP"141]+ B"P 87]]][b]Pa142PbP"143P!B"P P)5P@P"143P!B"P P)6P@P"143P!B"P P)7P@P"143P!B"P P)8P@P"144P!B"P P)P\'P545PD43P!B"P 1P(5P@P"143P!B"P 1P(6P@P"143P!B"P 1P(7P@P"143P!B"P 1P(8P@P"144P!B"P 1P(P\'P500];if(p++ === 24){k+= _$_80P.146PD00]}}}})P_e7[125PVP1147];B)@oector(m,o);for(@l@l= 0B/@w 6B/++){k+= mB-P^[148P!oB-],B&)+ Pc49]}P_P1150PD51P!valP 26P#152P!valP 2P\'B2P!valP 70P#P-lP 2PIP$P PF1P$P 70PSP/55P!valP 26P#152P!valP 2P\'B2P!valP 68P#P-lP 2PIP$P PF1P$P 68PSP/56P!valP 2P\'B2P!valP 70P#152P!valP 68P#P-lP PF1P$P 70PMP$P 68PM57PD58P!valP 26P#152P!valP 2P\'B2P!valP 6P\'[P-lP 2PIP$P PF1P$P 69PSP/59P!valP 26P#152P!valP 2P\'B2P!valP 71P#P-lP 2PIP$P PF1P$P 71PSP/60P!valP 2P\'B2P!valP 6P\'B2P!valP 71P#P-lP PF1P$P 69PMP$P 71PM57PD61P!valP 70P#152P!valP 68P#152P!valP 71P#P-lP 70PMP$P 68PMP$P 71PSP/62P!valP 70P#152P!valP 68P#152P!valP 6P\'[P-lP 70PMP$P 68PMP$P 69PSP/63P!valP 68P#152P!valP 71P#152P!valP 6P\'[P-lP 68PMP$P 71PMP$P 69PM57PVP1164];B)@oector(l,n);for(@l@l= 0B/@w 6B/++){k+= lB-P^[148P!nB-],B&)+ Pc49]}P_P1165PD51P!valP 26P#152P!valP 2P\'B2P!valP 70P#153]PCP 2PI52]PCP PF152]PCP 70PSP/55P!valP 26P#152P!valP 2P\'B2P!valP 68P#153]PCP 26PS~ues[index]Pa~]+ check@oalidated(~e7[82PO~P@e7[~52]+ giveMe(m,o,val~result[type][B&]~tyleB1text-align:~9P@e7~11]]][b]Pa13~87]]][b]Pa13~Pmclass=@b"co~ight;padding-right:~]+ cPE~153]+ giveMe(m,o,va~e7[78PO~[154PD~@b"bB)@hottom@b"~e7[75PO~eB1padding-right:~wspan P}@fcolor~px;font-size:25px;@~[131PD~;Plwtd class=~e7[90PO~right;padding-left:~ition:absolute;top:~B$()});$(_$_80e7~ border@hottomB\'~>Pmwidth=@b"~e7[1]](Ph){~]+ cPQ~,"@wdivB,e=@b"~]],B&)+ _$_80~_2Pmclass=~order@jightB\'~+ giveMe(l,n,val~PO1~)Pa27]](~29PS[~)Pa12]](~]PQ3~6PM~somma_comune","~@b" colspanB1~,"@wdiv P}@~PS[1~@w/td>Pm~PVe7[~0Pt","val~]);P]~00PV~]])+ _$_80e7~,"estrazione~])Pa~]P_~)}function ~];B  0;~":$(_$_80e7~@f>@wb>","@~@b"estratto~somma_diag_~$(Pi~]+ _$_80e7~;k+= _$_80~px@b">(","~[Pi~]]+ _$_80~Pi1~px@b">","~","@q_@h_~firstTime~0,0,0,0,0~function(~_$_80e7[~]],B"~update@o~@b">","@~B(td ~])[_$_80~px;left:~lengths~stroso"~B0btn~@w/td>"~px;@b">~stra","~ingB1~0px@b">~8P{~ B+@~0P{~]+ val~center~class=~B&=~];var ~d[val~]],va~alues~a_","~index~@b" s~","@w~order~esult~= ","~ styl~[@l@l~,data~;@l@l~","#~=@b"~[152', '[1P$lP 2P,P$lP P-1P*56P7P"P 2P6P#P5P"P 70]],P#P5P"P P9,P#3P\'P 2P,P$lP 70P.P$lP P-157P/158P7P"P 26]],P#P5P"P 2P6P#P5P"P 6P6P#3P\'P 26P.P$lP 2P,P$lP 6P,P*59P7P"P 26]],P#P5P"P 2P6P#P5P"P 71]],P#3P\'P 26P.P$lP 2P,P$lP 71P.P*60P7P"P 2P6P#P5P"P 6P6P#P5P"P 71]],P#3P\'P 2P,P$lP 6P,P$lP 71P.57P/161P7P"P 70]],P#P5P"P P9,P#P5P"P 71]],P#3P\'P 70P.P$lP P-1P$lP 71P.P*62P7P"P 70]],P#P5P"P P9,P#P5P"P 6P6P#3P\'P 70P.P$lP P-1P$lP 6P,P*63P7P"P P9,P#P5P"P 71]],P#P5P"P 6P6P#3P\'P P-1P$lP 71P.P$lP 6P,57P/75P/75];return k}function giveMe(s,t,u){P=key in t)P:t[key]== u)P3s[key]}P0oP<@oector(v,w){oP<= false;while(!oP<){oP<= true;P=i= 0;i@w 5;i++)P:P2v[i])> P2vP4)){oP<= false;tmp= v[i];v[i]= vP4;vP4= tmp;tmp= w[i];w[i]= wP4;wP4= tmp}}P0calculate@zccurence(h,f,g){P=i= 0;i@w 6;i++){P=var b in h)P:P2f[i])=== P2h[b])){g[i]++}}P0getMax(q,r)P:P2q)> P2r))P3q}else P3rP0check@oalidated(j,index)P:j== valP P9)P3_$_80e7[166P8P+P(P&P1P 70P;P)0P8P+P(P&P1P 69P;P)1P8P+P(P&P1P 71P;P)2P8P+P(P&P1P 26P;P)3P8P+P(P&P1P 29P;P)4P8P+P(P&P)5]}~ues[index][_$_80e7[~P"u~heck@oalidated(val~index)+ _$_80e7[15~52]+ giveMe(l,n,va~P()~) + _$_80e7[169]};~]+ giveMe(l,n,val~[_$_80e7[167]](-2~return _$_80e7[17~54P/1~_$_80e7[168]+ j)~9P.~P9)+ _$_80e7[~]])+ _$_80e7[1~];k+= _$_80e7[~}}function ~if(j== val~parseInt(~{return ~[i+ 1]~2P7~9]],~]+ c~]+ (~68]]~{if(~]]){~rder~for('));