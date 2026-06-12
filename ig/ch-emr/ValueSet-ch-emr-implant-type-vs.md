# Implant Type - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implant Type**

## ValueSet: Implant Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-implant-type-vs | *Version*:1.0.0-ballot |
| Active as of 2026-05-26 | *Computable Name*:ChEmrImplantTypeVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes for implant types 

 **References** 

* [CH Emergency Record Device](StructureDefinition-ch-emr-device.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ch-emr-implant-type-vs",
  "url" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-implant-type-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrImplantTypeVS",
  "title" : "Implant Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-26",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Codes for implant types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "concept" : [{
        "code" : "14789005"
      },
      {
        "code" : "84683006"
      },
      {
        "code" : "360046005"
      },
      {
        "code" : "303608005"
      },
      {
        "code" : "421168009"
      },
      {
        "code" : "2282003"
      },
      {
        "code" : "63289001"
      },
      {
        "code" : "43252007"
      },
      {
        "code" : "360329004"
      },
      {
        "code" : "257327003"
      },
      {
        "code" : "303277008"
      },
      {
        "code" : "102314001"
      },
      {
        "code" : "272307009"
      },
      {
        "code" : "360104003"
      },
      {
        "code" : "74444006"
      },
      {
        "code" : "304121006"
      },
      {
        "code" : "304185004"
      },
      {
        "code" : "360123005"
      },
      {
        "code" : "303617005"
      },
      {
        "code" : "102303004"
      },
      {
        "code" : "314523008"
      },
      {
        "code" : "304186003"
      },
      {
        "code" : "34759008"
      },
      {
        "code" : "286576009"
      },
      {
        "code" : "303619008"
      },
      {
        "code" : "25510005"
      },
      {
        "code" : "303490004"
      },
      {
        "code" : "264824009"
      },
      {
        "code" : "118375008"
      },
      {
        "code" : "14106009"
      },
      {
        "code" : "360129009"
      },
      {
        "code" : "6012004"
      },
      {
        "code" : "303500007"
      },
      {
        "code" : "303533002"
      },
      {
        "code" : "67270000"
      },
      {
        "code" : "417136005"
      },
      {
        "code" : "342706005"
      },
      {
        "code" : "303618000"
      },
      {
        "code" : "72506001"
      },
      {
        "code" : "398013009"
      },
      {
        "code" : "360041000"
      },
      {
        "code" : "272287005"
      },
      {
        "code" : "360103009"
      },
      {
        "code" : "268460000"
      },
      {
        "code" : "360058005"
      },
      {
        "code" : "257366006"
      },
      {
        "code" : "413766009"
      },
      {
        "code" : "19923001"
      },
      {
        "code" : "360070009"
      },
      {
        "code" : "414580007"
      },
      {
        "code" : "272245008"
      },
      {
        "code" : "63112008"
      },
      {
        "code" : "77777004"
      },
      {
        "code" : "271003"
      },
      {
        "code" : "360145006"
      },
      {
        "code" : "68183006"
      },
      {
        "code" : "77444004"
      },
      {
        "code" : "339648008"
      },
      {
        "code" : "341036005"
      },
      {
        "code" : "304070008"
      },
      {
        "code" : "429798007"
      },
      {
        "code" : "24073000"
      },
      {
        "code" : "257362008"
      },
      {
        "code" : "257282009"
      },
      {
        "code" : "360117000"
      },
      {
        "code" : "303499003"
      },
      {
        "code" : "90134004"
      },
      {
        "code" : "257363003"
      },
      {
        "code" : "17107009"
      },
      {
        "code" : "303503009"
      },
      {
        "code" : "25937001"
      },
      {
        "code" : "303515008"
      },
      {
        "code" : "16349000"
      },
      {
        "code" : "31031000"
      },
      {
        "code" : "45633005"
      },
      {
        "code" : "102319006"
      },
      {
        "code" : "424921004"
      },
      {
        "code" : "360063009"
      },
      {
        "code" : "423449009"
      },
      {
        "code" : "118378005"
      },
      {
        "code" : "304124003"
      },
      {
        "code" : "303726000"
      },
      {
        "code" : "465380004"
      },
      {
        "code" : "118374007"
      },
      {
        "code" : "304184000"
      },
      {
        "code" : "303947005"
      },
      {
        "code" : "65818007"
      },
      {
        "code" : "304120007"
      },
      {
        "code" : "360100007"
      },
      {
        "code" : "386124003"
      },
      {
        "code" : "286558002"
      },
      {
        "code" : "303497001"
      },
      {
        "code" : "344088002"
      },
      {
        "code" : "344575009"
      },
      {
        "code" : "257283004"
      },
      {
        "code" : "258593008"
      },
      {
        "code" : "118425005"
      },
      {
        "code" : "257275005"
      },
      {
        "code" : "257343005"
      },
      {
        "code" : "27606000"
      },
      {
        "code" : "52124006"
      },
      {
        "code" : "69805005"
      }]
    }]
  }
}

```
