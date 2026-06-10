# MedicationStatement with Abirateron - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement with Abirateron**

## Example MedicationStatement: MedicationStatement with Abirateron



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementAbirateron",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"]
  },
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "AbirateronAccordTab500mg",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"]
    },
    "code" : {
      "coding" : [{
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680679500013",
        "display" : "ABIRATERON Accord FCT 500 mg, blister 56 pce"
      },
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "L02BX03",
        "display" : "abiraterone"
      }],
      "text" : "ABIRATERON Accord FCT 500 mg, blister 56 pce"
    },
    "form" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10221000",
        "display" : "Film-coated tablet"
      }],
      "text" : "Film-coated tablet"
    },
    "amount" : {
      "numerator" : {
        "value" : 56,
        "unit" : "Tablet (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732936001"
      },
      "denominator" : {
        "value" : 1,
        "unit" : "Package - unit of product usage (qualifier value)",
        "system" : "http://snomed.info/sct",
        "code" : "1681000175101"
      }
    },
    "ingredient" : [{
      "itemCodeableConcept" : {
        "text" : "Abiraterone acetate"
      },
      "isActive" : true,
      "strength" : {
        "numerator" : {
          "value" : 500,
          "unit" : "mg",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Tablet (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        }
      }
    },
    {
      "itemCodeableConcept" : {
        "text" : "Lactose monohydrate"
      },
      "isActive" : false,
      "strength" : {
        "numerator" : {
          "value" : 253.2,
          "unit" : "mg",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Tablet (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        }
      }
    },
    {
      "itemCodeableConcept" : {
        "text" : "Microcrystalline cellulose"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Sodium croscarmellose"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Hypromellose"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Sodium lauryl sulfate"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Colloidal anhydrous silica"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Magnesium stearate"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Polyvinyl alcohol"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Titanium dioxide"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Macrogol"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Talc"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Iron(III) oxide"
      },
      "isActive" : false
    }]
  }],
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v3-substanceAdminSubstitution",
        "code" : "E",
        "display" : "equivalent"
      }]
    }
  },
  {
    "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code",
    "valueString" : "21423.01"
  }],
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:8ff72c70-15c0-44b5-a758-e99daacd3da0"
  }],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#AbirateronAccordTab500mg"
  },
  "subject" : {
    "reference" : "Patient/FranzMuster"
  },
  "dateAsserted" : "2026-06-13T13:30:00Z",
  "informationSource" : {
    "reference" : "PractitionerRole/HPWengerRole"
  },
  "dosage" : [{
    "text" : "1 tablet in the morning, 1 tablet in the evening. To be taken at least 1h before or 2h after meals.",
    "patientInstruction" : "To be taken at least 1h before or 2h after meals.",
    "timing" : {
      "repeat" : {
        "frequency" : 2,
        "period" : 1,
        "periodUnit" : "d",
        "when" : ["MORN", "EVE"]
      }
    },
    "route" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "20053000",
        "display" : "Oral use"
      }]
    },
    "method" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "0019",
        "display" : "Swallowing"
      }]
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 1,
        "unit" : "Tablet (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732936001"
      }
    }]
  }]
}

```
