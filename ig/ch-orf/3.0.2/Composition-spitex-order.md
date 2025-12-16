# Composition Spitex-Order - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Composition Spitex-Order**

## Example Composition: Composition Spitex-Order

**CH ORF Precedent Document**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:1622f2fb-6ba3-4532-9aed-35b158def187

**CH ORF Urgent Notification Contact For The Response To This Document**: [PractitionerRole](PractitionerRole-NotificationContactSabineMeier.md)

**CH ORF Receiver**: [PractitionerRole](PractitionerRole-ChOrfPractitionerRoleSPitex.md)

**CH ORF Copy Receiver**: [PractitionerRole](PractitionerRole-CopyReceiverSabineMeierPraxisSeeblick.md)

**CH ORF Copy Receiver**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**CH ORF Episode of Care**: [EpisodeOfCare: status = active](EpisodeOfCare-ChOrfEpisodeOfCareSUfferer.md)

**CH ORF Patient Consent**: [Consent: extension = Undetermined (qualifier value) (SNOMED CT#373068000),Tochter wird die Spitexunterstützung beim nächsten Besuch thematisieren; status = active; scope = Privacy Consent; category = Consent Document; policyRule =](Consent-ChOrfConsentSUfferer.md)

> **CH ORF Initiator**
* ch-orf-personalrelation: [SNOMED CT: 127849001](http://snomed.info/id/127849001) (Husband (person))
* ch-orf-legalrelation: [SNOMED CT: 58626002](http://snomed.info/id/58626002) (Legal guardian (person))
* ch-orf-personorganization: [RelatedPerson Max Ufferer](RelatedPerson-ChOrfRelatedPersonMUfferer.md)

**status**: Final

**type**: Record artifact (record artifact)

**category**: Order (record artifact)

**date**: 2019-03-31 11:46:09+0200

**author**: [PractitionerRole](PractitionerRole-StabiloBossPraxisSeeblick.md)

**title**: Order-Referral-Form



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "spitex-order",
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument",
      "valueIdentifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1622f2fb-6ba3-4532-9aed-35b158def187"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument",
      "valueReference" : {
        "reference" : "PractitionerRole/NotificationContactSabineMeier"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver",
      "valueReference" : {
        "reference" : "PractitionerRole/ChOrfPractitionerRoleSPitex"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
      "valueReference" : {
        "reference" : "PractitionerRole/CopyReceiverSabineMeierPraxisSeeblick"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
      "valueReference" : {
        "reference" : "Patient/SUfferer"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-antecedentepisodeofcare",
      "valueReference" : {
        "reference" : "EpisodeOfCare/ChOrfEpisodeOfCareSUfferer"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent",
      "valueReference" : {
        "reference" : "Consent/ChOrfConsentSUfferer"
      }
    },
    {
      "extension" : [
        {
          "url" : "ch-orf-personalrelation",
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "127849001",
            "display" : "Husband (person)"
          }
        },
        {
          "url" : "ch-orf-legalrelation",
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "58626002",
            "display" : "Legal guardian (person)"
          }
        },
        {
          "url" : "ch-orf-personorganization",
          "valueReference" : {
            "reference" : "RelatedPerson/ChOrfRelatedPersonMUfferer"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator"
    }
  ],
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "419891008",
        "display" : "Record artifact (record artifact)"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "721963009",
          "display" : "Order (record artifact)"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/SUfferer"
  },
  "date" : "2019-03-31T11:46:09+02:00",
  "author" : [
    {
      "reference" : "PractitionerRole/StabiloBossPraxisSeeblick"
    }
  ],
  "title" : "Order-Referral-Form",
  "section" : [
    {
      "title" : "Order-Referral",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "93037-0",
            "display" : "Portable medical order form"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Order-Referral-Form</div>"
      },
      "entry" : [
        {
          "reference" : "Questionnaire/order-referral-form"
        },
        {
          "reference" : "QuestionnaireResponse/qr-order-referral-form"
        },
        {
          "reference" : "ServiceRequest/sr-order-referral-form"
        }
      ]
    }
  ]
}

```
