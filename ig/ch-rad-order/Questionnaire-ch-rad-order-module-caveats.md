# Module Questionnaire Caveats - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Caveats**

## Questionnaire: Module Questionnaire Caveats 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-caveats | *Version*:2.0.1 |
| Active as of 2024-03-02 | *Computable Name*:ModuleQuestionnaireRadiologyOrderCaveats |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-rad-order-module-caveats",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-caveats",
  "version" : "2.0.1",
  "name" : "ModuleQuestionnaireRadiologyOrderCaveats",
  "title" : "Module Questionnaire Radiologyorder Caveats",
  "status" : "active",
  "date" : "2024-03-02",
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
  "item" : [
    {
      "linkId" : "caveatList",
      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.supportingInfo:caveats",
      "text" : "Caveats",
      "type" : "group",
      "item" : [
        {
          "linkId" : "caveatList.bloodCoagulation",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.category.coding.code",
          "text" : "Beinträchtigte Blutgerinnung",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ],
          "item" : [
            {
              "linkId" : "caveatList.bloodCoagulation.INR",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
              "text" : "INR",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "caveatList.bloodCoagulation",
                  "operator" : "=",
                  "answerCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "52101004"
                  }
                }
              ],
              "item" : [
                {
                  "linkId" : "caveatList.bloodCoagulation.INR.quantity",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation-definitions#Observation.valueQuantity",
                  "text" : "Wert (INR)",
                  "type" : "quantity"
                },
                {
                  "linkId" : "caveatList.bloodCoagulation.INR.dateTime",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation-definitions#Observation.effectiveDateTime",
                  "text" : "Zeitpunkt der Bestimmung",
                  "type" : "dateTime"
                }
              ]
            },
            {
              "linkId" : "caveatList.bloodCoagulation.platelets",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
              "text" : "Thrombozyten",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "caveatList.bloodCoagulation.platelets.quantity",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation-definitions#Observation.valueQuantity",
                  "text" : "Wert (10^9/L)",
                  "type" : "quantity"
                },
                {
                  "linkId" : "caveatList.bloodCoagulation.platelets.dateTime",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation-definitions#Observation.effectiveDateTime",
                  "text" : "Zeitpunkt der Bestimmung",
                  "type" : "dateTime"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "caveatList.renalInsufficiency",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Niereninsuffizienz",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ],
          "item" : [
            {
              "linkId" : "caveatList.renalInsufficiency.creatinineClearance",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
              "text" : "Creatinin-Clearance",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinineClearance.quantity",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation-definitions#Observation.valueQuantity",
                  "text" : "Wert (mL/min)",
                  "type" : "quantity"
                },
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinineClearance.dateTime",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation-definitions#Observation.effectiveDateTime",
                  "text" : "Zeitpunkt der Bestimmung",
                  "type" : "dateTime"
                }
              ]
            },
            {
              "linkId" : "caveatList.renalInsufficiency.creatinine",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
              "text" : "Creatinin",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinine.quantity",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation-definitions#Observation.valueQuantity",
                  "text" : "Wert (µmol/L)",
                  "type" : "quantity"
                },
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinine.dateTime",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation-definitions#Observation.effectiveDateTime",
                  "text" : "Zeitpunkt der Bestimmung",
                  "type" : "dateTime"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "caveatList.claustrophobia",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Klaustrophobie",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.bodyPiercing",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Körperpiercing",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.device",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#ch-rad-order-caveat-type",
          "text" : "Device (Herzschrittmacher, Herzklappenersatz, Insulinpumpe etc.)",
          "type" : "choice",
          "repeats" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-device"
        },
        {
          "linkId" : "caveatList.hyperthyroidism",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Hyperthyreose",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.diabetes",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Diabetes mellitus",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.gravida",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Schwangerschaft",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.contrastMediaAllergy",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
          "text" : "Kontrastmittelallergie",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
          "initial" : [
            {
              "valueCoding" : {
                "system" : "http://snomed.info/sct",
                "code" : "373068000"
              }
            }
          ]
        },
        {
          "linkId" : "caveatList.drugPrescription",
          "text" : "Relevante Medikamente",
          "type" : "group",
          "required" : true,
          "item" : [
            {
              "linkId" : "caveatList.drugPrescription.metformin",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Metformin",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.drugPrescription.betaBlocker",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Betablocker",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            }
          ]
        }
      ]
    }
  ]
}

```
