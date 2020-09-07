let map;let mapecole;let mappharmacie;let nom;let view;let basemapGallery;let trailheadsRenderer;let code;
esriConfig = {locale: "fr-FR"};
let queryoptions={responseType:"json",
	query: {
		f: "json",
		where:"1=1",
		geometryType: "esriGeometryEnvelope",
		spatialRel: "esriSpatialRelEnvelopeIntersects",
		returnCountOnly: false,
		outFields: "*",
		returnGeometry: true,
		outSR: 4326}};
let popupOpenspaces = {content: [{
		type: "fields",
		fieldInfos: [{fieldName: "Nom",label: "Nom",isEditable: true,tooltip: "",visible: true,format: null,stringFieldOption: "text-box"},
		  {fieldName: "contacts",label: "contacts",isEditable: true,tooltip: "",visible: true,format: null,stringFieldOption: "text-box"},
		  {fieldName: "heure d'ouverture",label: "heure d'ouverture",isEditable: true,tooltip: "",visible: true,format: null,stringFieldOption: "text-box"},
		  {fieldName: "heure de fermeture",label: "heure de fermeture",isEditable: true,tooltip: "",visible: true,stringFieldOption: "text-box"},
		  {fieldName: "De Garde",label: "status",isEditable: true,tooltip: "",visible: true,stringFieldOption: "text-box"},
		  {fieldName: "Photo",label: "photos",isEditable: true,tooltip: "",visible: true,stringFieldOption: "text-box"}]}]};

require([
	"esri/Map","esri/views/MapView","esri/widgets/Directions","esri/widgets/BasemapGallery","esri/widgets/Expand","esri/widgets/Legend","esri/layers/FeatureLayer",
	"esri/widgets/Home","esri/widgets/Search","esri/widgets/Locate","esri/widgets/Track","esri/Graphic","esri/widgets/Compass","esri/request"
  ],
  function(Map, MapView,Directions,BasemapGallery,Expand,Legend,FeatureLayer,Home,Search,Locate,Track, Graphic,Compass,Request) {

	 //creation de carte
	map= new Map({basemap: "osm"});

	view = new MapView({container: "viewDiv",map: map,center: [-5.547080,7.539989],zoom:7.5,  padding: {right: 320}});

	// selectionner fond de carte
	basemapGallery = new BasemapGallery({view: view,source: {portal: {url: "https://www.arcgis.com",useVectorBasemaps: false }} });
	var bgExpand = new Expand({view: view,content: basemapGallery});
	view.ui.add(bgExpand, "top-left");

	// Creation de la legende
	let legend = new Legend({view: view});
	view.ui.add(legend,"bottom-left");

	//Creation du champs recherche

	let search = new Search({view: view});
	view.ui.add(search,"top-right");

	//	Creation du module se localiser

	var locate = new Locate({view: view,useHeadingEnabled: false,goToOverride: function (view, options) {options.target.scale = 1500;return view.goTo(options.target);}});
	view.ui.add(locate, "top-left");

	  // Creation du module  suivre sa localisation

	var track = new Track({view: view,graphic: new Graphic({symbol: {type: "simple-marker",size: "12px",color: "green",outline: {color: "#efefef",width: "1.5px"}}}),useHeadingEnabled: false});
	view.ui.add(track, "top-left");

	  //Creation du module retour a la premiere vue de la carte(bouton home)

	const home = new Home({view: view});
	view.ui.add(home, "top-left");



	//cette fonction ajoute des données au differents champs territorial ivoiriens et permet de zoomer sur les données

	function ajouterL (urla,locali,i,local,fil1,fil2){

 		Request(urla,queryoptions).then(response=>{
			locali = document.getElementById(local); //le choix du territoire
			let field=response.data.fields[i]; // pointer sur fields et extraire le i eme element de ce que on veut recuperer 
			option = document.createElement("option");
			option.textContent ="---";
			locali.appendChild(option); // alouter "---"
			for (j=0; j< response.data.features.length;j++){  // parcourir le tableau d'attribut
				option = document.createElement("option");
				option.textContent = response.data.features[j].attributes[field.name]; // recuperer le nom des elements
				locali.appendChild(option);
			}



		locali.addEventListener("change", function(){  // au changement de l'utilisateur
		if(locali.value==="---"){
			    effacer("departement");
				ajouterL("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/3/query",departement,4,"departement","#departement option","#departement");	
		}else{
			for (let k = 0; k < response.data.features.length; k++) {
				if(response.data.features[k].attributes[field.name]===locali.value) {
					drawGeometry(response.data.features[k].geometry);
					if(locali===region){
					effacer("departement");
					code = response.data.features[k].attributes[response.data.fields[2].name];
					recuperer("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/3/query",4,5);
					}
				}
			}
		  }
		});


});

	}
    //cette fonction efface les données en dessous
	function effacer (test){
		var oSelect = document.getElementById(test),
		opts = oSelect.getElementsByTagName('option');
		while(opts[0]) {
		oSelect.removeChild(opts[0]);
	};
	}

	//cette fonction recupere les données de la localisation precedente
	function recuperer(url2,i,f){

		Request(url2,queryoptions).then(responses=>{
			let fieldss=responses.data.fields[i];
		for (z=0; z< responses.data.features.length;z++){
			if(code===responses.data.features[z].attributes[responses.data.fields[f].name]){
				option = document.createElement("option");
				option.textContent = responses.data.features[z].attributes[fieldss.name];
				departement.appendChild(option);
			}

		}		
	  });

	}

	ajouterL("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/4/query",region,3,"region","#region option","#region");

	ajouterL("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/3/query",departement,4,"departement","#departement option","#departement");

    ajouterL("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/2/query",prefecture,1,"prefecture","#prefecture option","#prefecture");

	ajouterL("https://services5.arcgis.com/y6Rhk0yOWHIJ5XpJ/ArcGIS/rest/services/Limites_administratives/FeatureServer/1/query",localite,1,"localite","#localite option","#localite");


 

        //creation de la fonction données (point,ligne,polygone)
	    function donnee_point(nom,url,site){
		trailheadsRenderer = {type: "simple",symbol: {type: "picture-marker",url: site,width: "18px",height: "18px"}}
		nom = new FeatureLayer({url:url,renderer: trailheadsRenderer,
			outFields: ["*"],
			popupTemplate: popupOpenspaces});
			map.add(nom,0);
			search.sources.push({
				layer: nom,
				searchFields: ["Nom"],
				displayField: "Nom",
				exactMatch: false,
				outFields: ["*"],
				resultGraphicEnabled: true,
				name: "rechercher dans le service public",
				placeholder: "Rechercher le service public",
			  });
	}


			donnees_service_public=["","pharmarcie","ecole primaire"]
			donnees_analyse=["","Obtenir un itinéraire et des directions","le nombre du service public par region"]

			selectionner(donnees,donnees_service_public,"donnees");
            selectionner(analyse,donnees_analyse,"analyse");

			function selectionner(element,tableau,type,option){
				element  = document.getElementById(type);
				for (let i=0;i<tableau.length;i++){
					option = document.createElement("option");
					option.textContent=tableau[i];
					element.appendChild(option);
				}
			}
			donnees.addEventListener("change",function(){
				if(donnees.value =="ecole primaire"){map.removeAll();donnee_point("ecolePrimaire","https://services8.arcgis.com/oTalEaSXAuyNT7xf/arcgis/rest/services/ecoleprimaire/FeatureServer/0","http://static.arcgis.com/images/Symbols/NPS/npsPictograph_0105b.png");}
				else{map.removeAll();donnee_point("pharmacie","https://services8.arcgis.com/oTalEaSXAuyNT7xf/arcgis/rest/services/pharmacie/FeatureServer/0","http://static.arcgis.com/images/Symbols/NPS/npsPictograph_0061b.png")}
			})



		function drawGeometry (geometry, cleanup=true) {
				let g;
				let s;
				//it is a line
				if (geometry.paths != undefined) 
				{g = {type: "polyline",paths: geometry.paths}
					s = {type: "simple-line",cap: "round",color: [255,0,0,0.5],width: 7,style: "solid"}
			
				} //it is a polygon
				else if (geometry.rings != undefined) 
				{g = {type: "polygon",rings: geometry.rings}
					s = {type: "simple-fill",color: [255,0,0,0.5],style: "backward-diagonal",
						outline: {width: 5,color: [0,0,255,0.7],style: "solid",cap: "round"}
					}
				}
				else //else its a point
				{g = {type: "point",longitude: geometry.x,latitude: geometry.y}
					s = {type: "simple-marker",color: [255,0,0, 0.5],size: 30}
				}
			
				if (cleanup === true) view.graphics = [];
				let graphic = new Graphic({geometry: g, symbol: s})
				view.graphics.add(graphic);
				view.goTo(graphic);
			}

  });

