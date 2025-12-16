# CH ORF Composition - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Composition**

## Resource Profile: CH ORF Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to specify how the generic elements (e.g. patient, author) and the healthcare domain specific elements must be structured in the Composition as the first entry of the document. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Examples for this Profile: [Composition/comp-order-referral-form](Composition-comp-order-referral-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-composition.csv), [Excel](StructureDefinition-ch-orf-composition.xlsx), [Schematron](StructureDefinition-ch-orf-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-composition",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition",
  "version" : "3.0.2",
  "name" : "ChOrfComposition",
  "title" : "CH ORF Composition",
  "status" : "active",
  "date" : "2025-12-16T09:33:08+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "Profile to specify how the generic elements (e.g. patient, author) and the healthcare domain specific elements \nmust be structured in the Composition as the first entry of the document.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH ORF Composition"
      },
      {
        "id" : "Composition.text",
        "path" : "Composition.text",
        "short" : "Narrative text of the composition",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension",
        "path" : "Composition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.extension:dataEnterer",
        "path" : "Composition.extension",
        "sliceName" : "dataEnterer",
        "short" : "The person/organization who has typed/filled in the form content",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:urgentNoficationContactForThisDocument",
        "path" : "Composition.extension",
        "sliceName" : "urgentNoficationContactForThisDocument",
        "short" : "An information recipient to notify for urgent matters",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:urgentNoficationContactForTheResponseToThisDocument",
        "path" : "Composition.extension",
        "sliceName" : "urgentNoficationContactForTheResponseToThisDocument",
        "short" : "An information recipient to notify for urgent matters about the response",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:receiver",
        "path" : "Composition.extension",
        "sliceName" : "receiver",
        "short" : "Person/organization who receives the document",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:copyReceiver",
        "path" : "Composition.extension",
        "sliceName" : "copyReceiver",
        "short" : "Person/organization who receives the copy of this order (shall receive also all results therefrom)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:precedentDocument",
        "path" : "Composition.extension",
        "sliceName" : "precedentDocument",
        "short" : "Identifier of the document which precedes this document in a thread.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:antecedentEpisodeOfCare",
        "path" : "Composition.extension",
        "sliceName" : "antecedentEpisodeOfCare",
        "short" : "Documentation of the antecedent episode of care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-antecedentepisodeofcare"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:initiator",
        "path" : "Composition.extension",
        "sliceName" : "initiator",
        "short" : "Profile to specify who intiated this order; in particulars for spitex and  transfer to retirement home etc.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.extension:patientConsent",
        "path" : "Composition.extension",
        "sliceName" : "patientConsent",
        "short" : "To specify if the patient gave an informed consent to this order; in particulars for spitex \nand  transfer to retirement home etc.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.status",
        "path" : "Composition.status",
        "mustSupport" : true
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "Precise type of clinical document",
        "mustSupport" : true,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "short" : "High-level kind of a clinical document at a macro level",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode"
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "short" : "Patient as the principle target of a particular form content",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "short" : "The person/organization responsible for the form content",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "Meaningful title",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral",
        "path" : "Composition.section",
        "sliceName" : "orderReferral",
        "short" : "Contains the data that supports the order and referral by form.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.title",
        "path" : "Composition.section.title",
        "short" : "Order-Referral",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "93037-0"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:Questionnaire",
        "path" : "Composition.section.entry",
        "sliceName" : "Questionnaire",
        "short" : "Questionnaire",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:Questionnaire.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:QuestionnaireResponse",
        "path" : "Composition.section.entry",
        "sliceName" : "QuestionnaireResponse",
        "short" : "QuestionnaireResponse",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:QuestionnaireResponse.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "ServiceRequest",
        "short" : "ServiceRequest",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:DocumentReference",
        "path" : "Composition.section.entry",
        "sliceName" : "DocumentReference",
        "short" : "DocumentReference",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:DocumentReference.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:originalRepresentation",
        "path" : "Composition.section",
        "sliceName" : "originalRepresentation",
        "short" : "Contains the original representation as a PDF of the current document.",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.title",
        "path" : "Composition.section.title",
        "short" : "Original representation",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "55108-5"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.text",
        "path" : "Composition.section.text",
        "short" : "Representation of the original view",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.entry",
        "path" : "Composition.section.entry",
        "short" : "According to the EPR ordonnance the PDF has to be in PDF/A-1 or PDF/A-2 format.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Binary"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
