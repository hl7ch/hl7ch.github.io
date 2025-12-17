# View Type - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **View Type**

## ValueSet: View Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-view-type | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderViewType |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for View Type Value Set in the context of CH RAD-Order. 

 **References** 

* [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* [QuestionnaireRadiologyOrder](Bundle-DocumentRadiologyOrder.md)
* [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)
* [Module Questionnaire Radiologyorder Instruction](Questionnaire-ch-rad-order-module-medinfo.md)

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
  "id" : "ch-rad-order-view-type",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-view-type",
  "version" : "2.0.1",
  "name" : "ChRadOrderViewType",
  "title" : "View Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:22:04+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for View Type Value Set in the context of CH RAD-Order.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://radlex.org",
        "concept" : [
          {
            "code" : "RID10424",
            "display" : "Right lateral decubitus position"
          },
          {
            "code" : "RID10425",
            "display" : "Left lateral decubitus position"
          },
          {
            "code" : "RID10439",
            "display" : "Lateral decubitus position"
          },
          {
            "code" : "RID10446",
            "display" : "Radial deviation position"
          },
          {
            "code" : "RID10447",
            "display" : "Ulnar deviation position"
          },
          {
            "code" : "RID10451",
            "display" : "Open mouth position"
          },
          {
            "code" : "RID10455",
            "display" : "Upright position"
          },
          {
            "code" : "RID10509",
            "display" : "Implant displaced"
          },
          {
            "code" : "RID10521",
            "display" : "Frontal projection"
          },
          {
            "code" : "RID10534",
            "display" : "Radiography grid"
          },
          {
            "code" : "RID10579",
            "display" : "axial plane"
          },
          {
            "code" : "RID28651",
            "display" : "Magnification"
          },
          {
            "code" : "RID39542",
            "display" : "transrectal"
          },
          {
            "code" : "RID39543",
            "display" : "transvaginal"
          },
          {
            "code" : "RID43583",
            "display" : "AP view"
          },
          {
            "code" : "RID43584",
            "display" : "apical lordotic view"
          },
          {
            "code" : "RID43586",
            "display" : "cone view"
          },
          {
            "code" : "RID43591",
            "display" : "lateral view"
          },
          {
            "code" : "RID43593",
            "display" : "left oblique view"
          },
          {
            "code" : "RID43594",
            "display" : "PA view"
          },
          {
            "code" : "RID43596",
            "display" : "right oblique view"
          },
          {
            "code" : "RID43597",
            "display" : "Spot view"
          },
          {
            "code" : "RID43600",
            "display" : "Arcein view"
          },
          {
            "code" : "RID43605",
            "display" : "Broden view"
          },
          {
            "code" : "RID43616",
            "display" : "Danelius miller view"
          },
          {
            "code" : "RID43618",
            "display" : "Ferguson view"
          },
          {
            "code" : "RID43621",
            "display" : "Friedman view"
          },
          {
            "code" : "RID43625",
            "display" : "Grashey view"
          },
          {
            "code" : "RID43630",
            "display" : "Holmblad view"
          },
          {
            "code" : "RID43637",
            "display" : "Judet view"
          },
          {
            "code" : "RID43653",
            "display" : "Mayer view"
          },
          {
            "code" : "RID43654",
            "display" : "Merchant view"
          },
          {
            "code" : "RID43665",
            "display" : "Norgaard view"
          },
          {
            "code" : "RID43667",
            "display" : "original Law view"
          },
          {
            "code" : "RID43671",
            "display" : "Caldwell view"
          },
          {
            "code" : "RID43681",
            "display" : "Stenvers view"
          },
          {
            "code" : "RID43682",
            "display" : "Stryker notch view"
          },
          {
            "code" : "RID43686",
            "display" : "Towne view"
          },
          {
            "code" : "RID43689",
            "display" : "Occipitomental view"
          },
          {
            "code" : "RID43690",
            "display" : "West point view"
          },
          {
            "code" : "RID45659",
            "display" : "babygram"
          },
          {
            "code" : "RID45661",
            "display" : "oblique view"
          },
          {
            "code" : "RID45663",
            "display" : "swimmers view"
          },
          {
            "code" : "RID45779",
            "display" : "supine view"
          },
          {
            "code" : "RID45780",
            "display" : "Left lateral view"
          },
          {
            "code" : "RID45781",
            "display" : "Right lateral view"
          },
          {
            "code" : "RID45782",
            "display" : "cross table lateral view"
          },
          {
            "code" : "RID45783",
            "display" : "carpal tunnel view"
          },
          {
            "code" : "RID45785",
            "display" : "Transthoracic view"
          },
          {
            "code" : "RID45786",
            "display" : "Sunrise view"
          },
          {
            "code" : "RID45787",
            "display" : "Tunnel view"
          },
          {
            "code" : "RID45788",
            "display" : "Inlet view"
          },
          {
            "code" : "RID45789",
            "display" : "Outlet view"
          },
          {
            "code" : "RID45790",
            "display" : "Axillary view"
          },
          {
            "code" : "RID45791",
            "display" : "Submentovertical view"
          },
          {
            "code" : "RID45795",
            "display" : "Obliques view"
          },
          {
            "code" : "RID45802",
            "display" : "Runoff"
          },
          {
            "code" : "RID49830",
            "display" : "Panoramic"
          },
          {
            "code" : "RID50070",
            "display" : "posteroanterior 45-degree flexion view"
          },
          {
            "code" : "RID50077",
            "display" : "External rotation view"
          },
          {
            "code" : "RID50079",
            "display" : "Internal rotation view"
          },
          {
            "code" : "RID50087",
            "display" : "10 degree caudal angle view"
          },
          {
            "code" : "RID50088",
            "display" : "30 degree caudal angle view"
          },
          {
            "code" : "RID50090",
            "display" : "10 degree cephalic angle view"
          },
          {
            "code" : "RID50091",
            "display" : "20 degree cephalic angle view"
          },
          {
            "code" : "RID50092",
            "display" : "Posteroanterior 30 degree flexion view"
          },
          {
            "code" : "RID50093",
            "display" : "45 degree cephalic angle view"
          },
          {
            "code" : "RID50094",
            "display" : "90 degree abduction view"
          },
          {
            "code" : "RID50095",
            "display" : "Bora view"
          },
          {
            "code" : "RID50096",
            "display" : "Brewerton view"
          },
          {
            "code" : "RID50097",
            "display" : "Garth view"
          },
          {
            "code" : "RID50098",
            "display" : "Harris view"
          },
          {
            "code" : "RID50099",
            "display" : "Rosenberg view"
          },
          {
            "code" : "RID50100",
            "display" : "Von Rosen view"
          },
          {
            "code" : "RID50102",
            "display" : "Waters upright view"
          },
          {
            "code" : "RID50103",
            "display" : "Zanca view"
          },
          {
            "code" : "RID50104",
            "display" : "Endorectal view"
          },
          {
            "code" : "RID50106",
            "display" : "Left anterior oblique view"
          },
          {
            "code" : "RID50107",
            "display" : "Lateral frog leg view"
          },
          {
            "code" : "RID50109",
            "display" : "Lateral spot view"
          },
          {
            "code" : "RID50111",
            "display" : "Laurin view"
          },
          {
            "code" : "RID50113",
            "display" : "Left posterior oblique view"
          },
          {
            "code" : "RID50114",
            "display" : "Mediolateral oblique view"
          },
          {
            "code" : "RID50115",
            "display" : "Mortise view"
          },
          {
            "code" : "RID50116",
            "display" : "Odontoid view"
          },
          {
            "code" : "RID50118",
            "display" : "Posteroanterior prone view"
          },
          {
            "code" : "RID50119",
            "display" : "radio head capitallar view"
          },
          {
            "code" : "RID50120",
            "display" : "Right anterior oblique view"
          },
          {
            "code" : "RID50121",
            "display" : "Right posterior oblique view"
          },
          {
            "code" : "RID50122",
            "display" : "Scaphoid view"
          },
          {
            "code" : "RID50123",
            "display" : "Serendipity view"
          },
          {
            "code" : "RID50124",
            "display" : "Tangential view"
          },
          {
            "code" : "RID50125",
            "display" : "True anteroposterior view"
          },
          {
            "code" : "RID50126",
            "display" : "True lateral view"
          },
          {
            "code" : "RID50127",
            "display" : "Velpeau view"
          },
          {
            "code" : "RID50128",
            "display" : "Laterally exaggerated craniocaudal view"
          },
          {
            "code" : "RID50129",
            "display" : "Y view"
          },
          {
            "code" : "RID50172",
            "display" : "closed mouth position"
          },
          {
            "code" : "RID50328",
            "display" : "air gap breast view"
          },
          {
            "code" : "RID50329",
            "display" : "rolled breast view"
          },
          {
            "code" : "RID50367",
            "display" : "sunrise 20 degrees view"
          },
          {
            "code" : "RID50368",
            "display" : "sunrise 40 degrees view"
          },
          {
            "code" : "RID50369",
            "display" : "sunrise 60 degrees view"
          },
          {
            "code" : "RID50370",
            "display" : "Merchant 30 degrees view"
          },
          {
            "code" : "RID50371",
            "display" : "Merchant 45 degrees view"
          },
          {
            "code" : "RID50372",
            "display" : "Merchant 60 degrees view"
          },
          {
            "code" : "RID50373",
            "display" : "Trans-scapular view"
          },
          {
            "code" : "RID50386",
            "display" : "Oblique upright view"
          },
          {
            "code" : "RID50534",
            "display" : "Bitewing view"
          },
          {
            "code" : "RID50535",
            "display" : "Jones view"
          },
          {
            "code" : "RID50628",
            "display" : "Max abduction"
          },
          {
            "code" : "RID50629",
            "display" : "Oblique prone"
          },
          {
            "code" : "RID50635",
            "display" : "Oblique crosstable"
          },
          {
            "code" : "RID5818",
            "display" : "anterior"
          },
          {
            "code" : "RID6427",
            "display" : "Transabdominal"
          }
        ]
      }
    ]
  }
}

```
