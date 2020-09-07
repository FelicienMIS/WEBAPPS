<template>
    <div class="container">
        <div id = 'viewp' style='width:1150px;height:670px'></div>
        <div id="editorDiv"></div>
        
    </div>
</template>

<script>
import { loadModules } from 'esri-loader';

export default {
  name: 'web-map',
  mounted() {
    // lazy load the required ArcGIS API for JavaScript modules and CSS
    loadModules(['esri/Map', 'esri/views/MapView','esri/layers/FeatureLayer','esri/widgets/Editor'], { css: true })
    .then(([ArcGISMap, MapView,FeatureLayer,Editor]) => {
      let popupOpenspaces = {
	content: [
	  {
		type: "fields",
		fieldInfos: [
		  {
			fieldName: "Nom",
			label: "Nom",
			isEditable: true,
			tooltip: "",
			visible: true,
			format: null,
			stringFieldOption: "text-box"
		  },
		  {
			fieldName: "contacts",
			label: "contacts",
			isEditable: true,
			tooltip: "",
			visible: true,
			format: null,
			stringFieldOption: "text-box"
		  },
		  {
			fieldName: "heure d'ouverture",
			label: "heure d'ouverture",
			isEditable: true,
			tooltip: "",
			visible: true,
			format: null,
			stringFieldOption: "text-box"
		  },
		  {
			fieldName: "heure de fermeture",
			label: "heure de fermeture",
			isEditable: true,
			tooltip: "",
			visible: true,
			stringFieldOption: "text-box"
		  },
		  {
			fieldName: "De Garde",
			label: "status",
			isEditable: true,
			tooltip: "",
			visible: true,
			stringFieldOption: "text-box"
		  },
		  {
			fieldName: "Photo",
			label: "photos",
			isEditable: true,
			tooltip: "",
			visible: true,
			stringFieldOption: "text-box"
		  }
		]
	  }
	]
  };
    let trailheadsRenderer = {type: "simple",symbol: {type: "picture-marker",url: "http://static.arcgis.com/images/Symbols/NPS/npsPictograph_0061b.png",width: "18px",height: "18px"}}

      var myPointsFeatureLayer = new FeatureLayer({
          //*** Replace with your URL ***//
          url: "https://services8.arcgis.com/oTalEaSXAuyNT7xf/arcgis/rest/services/pharmacie/FeatureServer/0",
          renderer: trailheadsRenderer,
          			outFields: ["*"],
		          	popupTemplate: popupOpenspaces
          
        });

      const map = new ArcGISMap({
        basemap: 'osm',
        layers: [myPointsFeatureLayer]
      });


      let view = new MapView({
        container: "viewp",
        map: map,
        center: [-5.547080,7.539989],
        zoom: 8
      });

        var editorWidget = new Editor({
        view: view
      });

       view.ui.add(editorWidget, "top-right");
		});
		

  },
  beforeDestroy() {
    if (this.view) {
      // destroy the map view
      this.view.container = null;
    }
  }
}; 
</script>