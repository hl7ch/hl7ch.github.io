# Guidance for Action - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Guidance for Action**

## ValueSet: Guidance for Action (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-guidance-for-action | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderGuidanceForAction |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Guidance for Action Value Set in the context of CH RAD-Order. 

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
  "id" : "ch-rad-order-guidance-for-action",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-guidance-for-action",
  "version" : "2.0.1",
  "name" : "ChRadOrderGuidanceForAction",
  "title" : "Guidance for Action",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:17:47+00:00",
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
  "description" : "Definition for Guidance for Action Value Set in the context of CH RAD-Order.",
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
            "code" : "RID10379",
            "display" : "Venography"
          },
          {
            "code" : "RID10380",
            "display" : "myelography"
          },
          {
            "code" : "RID10397",
            "display" : "Ablation"
          },
          {
            "code" : "RID10398",
            "display" : "Aspiration of bodily substance"
          },
          {
            "code" : "RID10401",
            "display" : "Atherectomy"
          },
          {
            "code" : "RID10404",
            "display" : "embolization"
          },
          {
            "code" : "RID10406",
            "display" : "infusion"
          },
          {
            "code" : "RID10407",
            "display" : "Repair"
          },
          {
            "code" : "RID10408",
            "display" : "Object retrieval"
          },
          {
            "code" : "RID10412",
            "display" : "Thrombectomy"
          },
          {
            "code" : "RID10415",
            "display" : "Device removal"
          },
          {
            "code" : "RID10417",
            "display" : "Drainage"
          },
          {
            "code" : "RID11030",
            "display" : "Balloon dilation procedure"
          },
          {
            "code" : "RID11031",
            "display" : "Angioplasty"
          },
          {
            "code" : "RID12933",
            "display" : "Fine-needle aspiration"
          },
          {
            "code" : "RID1559",
            "display" : "Procedure"
          },
          {
            "code" : "RID1634",
            "display" : "Gastrostomy"
          },
          {
            "code" : "RID1647",
            "display" : "Chemoembolization"
          },
          {
            "code" : "RID1671",
            "display" : "cholecystostomy"
          },
          {
            "code" : "RID1754",
            "display" : "cryoablation"
          },
          {
            "code" : "RID1839",
            "display" : "Vertebroplasty"
          },
          {
            "code" : "RID1840",
            "display" : "kyphoplasty"
          },
          {
            "code" : "RID1849",
            "display" : "radiofrequency ablation"
          },
          {
            "code" : "RID28707",
            "display" : "device placement procedure"
          },
          {
            "code" : "RID28708",
            "display" : "Localization"
          },
          {
            "code" : "RID28842",
            "display" : "Injection"
          },
          {
            "code" : "RID35774",
            "display" : "NERVE BLOCK"
          },
          {
            "code" : "RID35777",
            "display" : "Stereotactic localization"
          },
          {
            "code" : "RID35813",
            "display" : "paracentesis"
          },
          {
            "code" : "RID35814",
            "display" : "pericardiocentesis"
          },
          {
            "code" : "RID35815",
            "display" : "thoracentesis"
          },
          {
            "code" : "RID38602",
            "display" : "Vacuum-assisted biopsy"
          },
          {
            "code" : "RID38611",
            "display" : "Biopsy"
          },
          {
            "code" : "RID39262",
            "display" : "radiotherapy"
          },
          {
            "code" : "RID43245",
            "display" : "tube insertion"
          },
          {
            "code" : "RID45699",
            "display" : "STEREOTACTIC BIOPSY"
          },
          {
            "code" : "RID45700",
            "display" : "Needle localization"
          },
          {
            "code" : "RID45710",
            "display" : "Endoscopy"
          },
          {
            "code" : "RID46071",
            "display" : "feeding tube advancement"
          },
          {
            "code" : "RID46073",
            "display" : "lumbar puncture"
          },
          {
            "code" : "RID49569",
            "display" : "venous sampling"
          },
          {
            "code" : "RID49593",
            "display" : "endovenous laser treatment"
          },
          {
            "code" : "RID49596",
            "display" : "manometry"
          },
          {
            "code" : "RID49621",
            "display" : "Device exchange"
          },
          {
            "code" : "RID49632",
            "display" : "check tube"
          },
          {
            "code" : "RID49634",
            "display" : "Substance removal"
          },
          {
            "code" : "RID49657",
            "display" : "hemodynamic evaluation"
          },
          {
            "code" : "RID49739",
            "display" : "cholangioscopy"
          },
          {
            "code" : "RID49747",
            "display" : "ligation"
          },
          {
            "code" : "RID49748",
            "display" : "mechanical thrombectomy"
          },
          {
            "code" : "RID49749",
            "display" : "microwave ablation"
          },
          {
            "code" : "RID49755",
            "display" : "percutaneous sympathectomy"
          },
          {
            "code" : "RID49757",
            "display" : "percutaneous transluminal angioplasty"
          },
          {
            "code" : "RID49760",
            "display" : "Device revision"
          },
          {
            "code" : "RID49771",
            "display" : "stab phlebectomy"
          },
          {
            "code" : "RID49772",
            "display" : "Dilation procedure"
          },
          {
            "code" : "RID49776",
            "display" : "vertebral augmentation"
          },
          {
            "code" : "RID49777",
            "display" : "Core needle biopsy"
          },
          {
            "code" : "RID49838",
            "display" : "Tissue sampling"
          },
          {
            "code" : "RID49850",
            "display" : "Radiosurgery"
          },
          {
            "code" : "RID49857",
            "display" : "device replacement"
          },
          {
            "code" : "RID49866",
            "display" : "Deep biopsy"
          },
          {
            "code" : "RID49871",
            "display" : "Superficial biopsy"
          },
          {
            "code" : "RID49896",
            "display" : "Change"
          },
          {
            "code" : "RID49912",
            "display" : "reduced"
          },
          {
            "code" : "RID49956",
            "display" : "Vascular access"
          },
          {
            "code" : "RID50031",
            "display" : "Peripheral venous access"
          },
          {
            "code" : "RID50156",
            "display" : "Bronchoscopy"
          },
          {
            "code" : "RID50240",
            "display" : "Denervation procedure"
          },
          {
            "code" : "RID50330",
            "display" : "Deep drainage"
          },
          {
            "code" : "RID50349",
            "display" : "Object removal"
          },
          {
            "code" : "RID50359",
            "display" : "Object repositioning"
          },
          {
            "code" : "RID50522",
            "display" : "Radioembolization"
          },
          {
            "code" : "RID50523",
            "display" : "Vascular sclerotherapy"
          },
          {
            "code" : "RID50524",
            "display" : "Excisional biopsy"
          }
        ]
      }
    ]
  }
}

```
