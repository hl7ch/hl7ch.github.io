# CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component**

## Resource Profile: CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservation_CBC |
| **Copyright/Legal**: Used by permission of HL7 Switzerland, all rights reserved Creative Commons License | |

 
Profile for observation laboratory result of automated Count of Blood Cells. We choose as Unit 10⁹/L or 10¹²/L for Cell Count. 

 
This profile constrains the ChLabObservationResultsLaboratoryt profile to represent results produced by automated CBC (count of Blood-Cells) for the HL7 Swiss project. 

**Usages:**

* Examples for this Profile: [Observation/Result-CBC](Observation-Result-CBC.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-cbc)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-cbc.csv), [Excel](StructureDefinition-ch-lab-observation-cbc.xlsx), [Schematron](StructureDefinition-ch-lab-observation-cbc.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-cbc",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc",
  "version" : "2.0.0",
  "name" : "ChLabObservation_CBC",
  "title" : "CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component",
  "status" : "active",
  "date" : "2025-12-16T10:40:10+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Profile for observation laboratory result of automated Count of Blood Cells. We choose as Unit 10⁹/L or 10¹²/L for Cell Count.",
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
  "purpose" : "This profile constrains the ChLabObservationResultsLaboratoryt profile to represent results produced by automated CBC (count of Blood-Cells) for the  HL7 Swiss project.",
  "copyright" : "Used by permission of HL7 Switzerland, all rights reserved Creative Commons License",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.category:studyType",
        "path" : "Observation.category",
        "sliceName" : "studyType",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18723-7"
            }
          ]
        }
      },
      {
        "id" : "Observation.category:specialty",
        "path" : "Observation.category",
        "sliceName" : "specialty",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "394916005"
            }
          ]
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "58410-2"
            }
          ]
        }
      },
      {
        "id" : "Observation.method",
        "path" : "Observation.method",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "702659008"
            }
          ]
        }
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Component observations",
        "min" : 8,
        "max" : "12",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount",
        "path" : "Observation.component",
        "sliceName" : "WhiteBloodCellCount",
        "short" : "Leucocyte count",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.code",
        "path" : "Observation.component.code",
        "short" : "Leucocyte count code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "6690-2"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:WhiteBloodCellCount.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "10*9/L"
      },
      {
        "id" : "Observation.component:RedBloodCellCount",
        "path" : "Observation.component",
        "sliceName" : "RedBloodCellCount",
        "short" : "Erythrocyte count",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:RedBloodCellCount.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:RedBloodCellCount.code",
        "path" : "Observation.component.code",
        "short" : "Leucocyte count code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "789-8"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:RedBloodCellCount.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:RedBloodCellCount.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:RedBloodCellCount.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:RedBloodCellCount.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "10*12/L"
      },
      {
        "id" : "Observation.component:Hemoglobin",
        "path" : "Observation.component",
        "sliceName" : "Hemoglobin",
        "short" : "Hemoglobin",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hemoglobin.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:Hemoglobin.code",
        "path" : "Observation.component.code",
        "short" : "Hemoglobin code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "718-7"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hemoglobin.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hemoglobin.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hemoglobin.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hemoglobin.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "g/dL"
      },
      {
        "id" : "Observation.component:Hematocrit",
        "path" : "Observation.component",
        "sliceName" : "Hematocrit",
        "short" : "Hematocrit",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hematocrit.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:Hematocrit.code",
        "path" : "Observation.component.code",
        "short" : "Hematocrit code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "4544-3"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hematocrit.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hematocrit.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hematocrit.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:Hematocrit.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "%"
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume",
        "path" : "Observation.component",
        "sliceName" : "MeanCorpuscularVolume",
        "short" : "Mean Corpuscular Volume",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.code",
        "path" : "Observation.component.code",
        "short" : "MeanCorpuscularVolume code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "787-2"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularVolume.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "fL"
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin",
        "path" : "Observation.component",
        "sliceName" : "MeanCorpuscularHemoglobin",
        "short" : "Mean Corpuscular Hemoglobin",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.code",
        "path" : "Observation.component.code",
        "short" : "MeanCorpuscularHemoglobin code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "785-6"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobin.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "pg"
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration",
        "path" : "Observation.component",
        "sliceName" : "MeanCorpuscularHemoglobinConcentration",
        "short" : "Mean Corpuscular Hemoglobin Concentration",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.code",
        "path" : "Observation.component.code",
        "short" : "MeanCorpuscularHemoglobinConcentration code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "786-4"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanCorpuscularHemoglobinConcentration.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "g/dL"
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth",
        "path" : "Observation.component",
        "sliceName" : "ErythrocyteDistWidth",
        "short" : "Erythrocyte distribution width",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.code",
        "path" : "Observation.component.code",
        "short" : "ErythrocyteDistWidth code",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-entsvol-ratio"
        }
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:ErythrocyteDistWidth.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "fL"
      },
      {
        "id" : "Observation.component:PlateletCount",
        "path" : "Observation.component",
        "sliceName" : "PlateletCount",
        "short" : "Platelet Count",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletCount.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:PlateletCount.code",
        "path" : "Observation.component.code",
        "short" : "PlateletCount code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "777-3"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletCount.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletCount.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletCount.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletCount.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "10^9/L"
      },
      {
        "id" : "Observation.component:PlateletDistWidth",
        "path" : "Observation.component",
        "sliceName" : "PlateletDistWidth",
        "short" : "Platelet Distribution Width",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletDistWidth.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:PlateletDistWidth.code",
        "path" : "Observation.component.code",
        "short" : "Platelet distribution width [Entitic volume] in Blood by Automated count",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "32207-3"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletDistWidth.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletDistWidth.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletDistWidth.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletDistWidth.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "fL"
      },
      {
        "id" : "Observation.component:PlateletMeanVolume",
        "path" : "Observation.component",
        "sliceName" : "PlateletMeanVolume",
        "short" : "Platelet Mean Volume",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.code",
        "path" : "Observation.component.code",
        "short" : "PlateletMeanVolume code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "32623-1"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "automated CBC Profile component value",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:PlateletMeanVolume.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "fixedCode" : "fL"
      }
    ]
  }
}

```
