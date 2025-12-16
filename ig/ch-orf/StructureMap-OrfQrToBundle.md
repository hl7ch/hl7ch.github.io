# Map ORF - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Map ORF**

## StructureMap: Map ORF 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureMap/OrfQrToBundle | *Version*:3.0.2 |
| Draft as of 2025-12-16 | *Computable Name*:OrfQrToBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
ORF QuestionnaireResponse to Bundle 2021-01-11 Oliver Egger QRF Questionnaire: http://fhir.ch/ig/ch-orf/Questionnaire-order-referral-form.html QRF QuestionnaireResponse: http://fhir.ch/ig/ch-orf/QuestionnaireResponse-order-referral-form.xml.html Bundle: http://fhir.ch/ig/ch-orf/StructureDefinition-ch-orf-document.html 



## Resource Content

```json
{
  "resourceType" : "StructureMap",
  "id" : "OrfQrToBundle",
  "url" : "http://fhir.ch/ig/ch-orf/StructureMap/OrfQrToBundle",
  "version" : "3.0.2",
  "name" : "OrfQrToBundle",
  "status" : "draft",
  "date" : "2025-12-16T09:36:47+00:00",
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
  "description" : "ORF QuestionnaireResponse to Bundle\r\n2021-01-11 Oliver Egger\r\nQRF Questionnaire: http://fhir.ch/ig/ch-orf/Questionnaire-order-referral-form.html\r\nQRF QuestionnaireResponse: http://fhir.ch/ig/ch-orf/QuestionnaireResponse-order-referral-form.xml.html\r\nBundle: http://fhir.ch/ig/ch-orf/StructureDefinition-ch-orf-document.html",
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
  "structure" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
      "mode" : "source",
      "alias" : "QuestionnaireResponseSource"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Bundle",
      "mode" : "target",
      "alias" : "Bundle"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Composition",
      "mode" : "target",
      "alias" : "Composition"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Patient",
      "mode" : "target",
      "alias" : "Patient"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
      "mode" : "target",
      "alias" : "RelatedPerson"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Organization",
      "mode" : "target",
      "alias" : "Organization"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
      "mode" : "target",
      "alias" : "Practitioner"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
      "mode" : "target",
      "alias" : "PractitionerRole"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
      "mode" : "target",
      "alias" : "ServiceRequest"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/Extension",
      "mode" : "target",
      "alias" : "Extension"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
      "mode" : "target",
      "alias" : "EpisodeOfCare"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
      "mode" : "target",
      "alias" : "QuestionnaireResponse"
    }
  ],
  "group" : [
    {
      "name" : "OrfQrToBundle",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponseSource",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "documentIdentifier",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "documentIdentifier"
            },
            {
              "context" : "documentIdentifier",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:ietf:rfc:3986"
                }
              ]
            },
            {
              "contextType" : "variable",
              "variable" : "uuidDoc",
              "transform" : "uuid"
            },
            {
              "context" : "documentIdentifier",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuidDoc"
                }
              ]
            }
          ]
        },
        {
          "name" : "OrfQrToBundle",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "composition",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Composition"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "timestamp",
              "variable" : "timestamp",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "now()"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "type",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "document"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "date",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "timestamp"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "title",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Order and Referral by Form"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "419891008"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://snomed.info/sct"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "category",
              "variable" : "category"
            },
            {
              "context" : "category",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "721963009"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://snomed.info/sct"
                }
              ]
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "patient",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Patient"
                }
              ]
            },
            {
              "context" : "patient",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "questionnaireresp",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "QuestionnaireResponse"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "questionnaireresp",
              "source" : [
                {
                  "context" : "qr"
                }
              ],
              "dependent" : [
                {
                  "name" : "QuestionnaireResponseMap",
                  "variable" : ["qr", "questionnaireresp"]
                }
              ]
            },
            {
              "name" : "orfbundle",
              "source" : [
                {
                  "context" : "qr"
                }
              ],
              "target" : [
                {
                  "context" : "questionnaireresp",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid4",
                  "transform" : "uuid"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid4"
                    }
                  ]
                },
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e5"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "servicerequest",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "ServiceRequest"
                    }
                  ]
                },
                {
                  "context" : "servicerequest",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid5",
                  "transform" : "uuid"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid5"
                    }
                  ]
                }
              ],
              "dependent" : [
                {
                  "name" : "QrToBundle",
                  "variable" : [
                    "qr",
                    "patient",
                    "questionnaireresp",
                    "servicerequest",
                    "composition",
                    "bundle"
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "QuestionnaireResponseMap",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "tgt",
          "type" : "QuestionnaireResponse",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "identifier",
          "source" : [
            {
              "context" : "src",
              "element" : "identifier",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "identifier",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "basedOn",
          "source" : [
            {
              "context" : "src",
              "element" : "basedOn",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "basedOn",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "partOf",
          "source" : [
            {
              "context" : "src",
              "element" : "partOf",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "partOf",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "questionnaire",
          "source" : [
            {
              "context" : "src",
              "element" : "questionnaire",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "questionnaire",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "status",
          "source" : [
            {
              "context" : "src",
              "element" : "status",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "subject",
          "source" : [
            {
              "context" : "src",
              "element" : "subject",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "subject",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "encounter",
          "source" : [
            {
              "context" : "src",
              "element" : "encounter",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "encounter",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "authored",
          "source" : [
            {
              "context" : "src",
              "element" : "authored",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "authored",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "author",
          "source" : [
            {
              "context" : "src",
              "element" : "author",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "author",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "source",
          "source" : [
            {
              "context" : "src",
              "element" : "source",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "source",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "value"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "item",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueId" : "value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "QrToGroups",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponseSource",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "grporder",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'order'"
            }
          ],
          "dependent" : [
            {
              "name" : "OrderItems",
              "variable" : ["grp", "bundle", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "receiver",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'receiver'"
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverInit",
              "variable" : ["grp", "bundle", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "grpinitiator",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'initiator'"
            }
          ],
          "dependent" : [
            {
              "name" : "InitiatorInit",
              "variable" : ["grp", "bundle", "patient", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "grppatient",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'patient'"
            }
          ],
          "dependent" : [
            {
              "name" : "PatientItems",
              "variable" : ["grp", "bundle", "patient", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "grprequestedencounter",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'requestedEncounter'"
            }
          ],
          "dependent" : [
            {
              "name" : "RequestedEncounterItems",
              "variable" : ["grp", "bundle", "patient", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "grprequestedencounter",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'coverage'"
            }
          ],
          "dependent" : [
            {
              "name" : "Coverage",
              "variable" : ["grp", "bundle", "patient", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "grpsender",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'sender'"
            }
          ],
          "dependent" : [
            {
              "name" : "SenderAuthorInit",
              "variable" : ["grp", "bundle", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "receiverCopy",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'receiverCopy'"
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverCopy",
              "variable" : ["grp", "bundle", "patient", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "appointment",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'appointment'"
            }
          ],
          "dependent" : [
            {
              "name" : "Appointment",
              "variable" : ["grp", "bundle", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "AntecedentEpisodeOfCareInit",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'antecedentEpisodeOfCare'"
            }
          ],
          "dependent" : [
            {
              "name" : "AntecedentEpisodeOfCareInit",
              "variable" : ["grp", "bundle", "patient", "composition"]
            }
          ]
        },
        {
          "name" : "consent",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'consent'"
            }
          ],
          "dependent" : [
            {
              "name" : "Consent",
              "variable" : ["grp", "bundle", "composition"]
            }
          ]
        },
        {
          "name" : "note",
          "source" : [
            {
              "context" : "qr",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'note'"
            }
          ],
          "dependent" : [
            {
              "name" : "Note",
              "variable" : ["grp", "serviceRequest"]
            }
          ]
        }
      ]
    },
    {
      "name" : "OrderItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "orderPrecedentDocumentIdentifier",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.precedentDocumentIdentifier') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Identifier"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:ietf:rfc:3986"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "orderPlacerOrderIdentifier",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.placerOrderIdentifier') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "placer"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://terminology.hl7.org/CodeSystem/v2-0203"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "PLAC"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "orderPlacerOrderIdentifierDomain",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.placerOrderIdentifierDomain') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "placer"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "orderFillerOrderIdentifier",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.fillerOrderIdentifier') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "filler"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://terminology.hl7.org/CodeSystem/v2-0203"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "FILL"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "orderFillerOrderIdentifierDomain",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.fillerOrderIdentifierDomain') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "filler"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.authoredOn') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "authoredOn",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.priority') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "priority",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value.code"
                }
              ]
            }
          ]
        },
        {
          "name" : "ordeNnotificationContactDocument",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'order.notificationContactDocument')"
            }
          ],
          "rule" : [
            {
              "name" : "orderNotificationContactDocumentItems",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "target" : [
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e4"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "practitionerRoleDataEnterer",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "PractitionerRole"
                    }
                  ]
                },
                {
                  "context" : "practitionerRoleDataEnterer",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid4",
                  "transform" : "uuid"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid4"
                    }
                  ]
                },
                {
                  "context" : "composition",
                  "contextType" : "variable",
                  "element" : "extension",
                  "variable" : "extension"
                },
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e5"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "practitionerDataEnterer",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Practitioner"
                    }
                  ]
                },
                {
                  "context" : "practitionerDataEnterer",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid5",
                  "transform" : "uuid"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid5"
                    }
                  ]
                },
                {
                  "context" : "practitionerRoleDataEnterer",
                  "contextType" : "variable",
                  "element" : "practitioner",
                  "variable" : "reference",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Reference"
                    }
                  ]
                },
                {
                  "context" : "reference",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid5"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "data",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "UrgentNotificationContactForRequestItems",
                      "variable" : ["item", "practitionerRoleDataEnterer", "practitionerDataEnterer"]
                    }
                  ]
                },
                {
                  "name" : "extension",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "ExtOrfUrgentNotificationContactForRequest",
                      "variable" : ["item", "practitionerRoleDataEnterer", "extension"]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "orderNotificationContactDocumentResponse",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'order.notificationContactDocumentResponse')"
            }
          ],
          "rule" : [
            {
              "name" : "orderNotificationContactDocumentResponseItems",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "target" : [
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e4"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "practitionerRoleDataEnterer",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "PractitionerRole"
                    }
                  ]
                },
                {
                  "context" : "practitionerRoleDataEnterer",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid4",
                  "transform" : "uuid"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid4"
                    }
                  ]
                },
                {
                  "context" : "composition",
                  "contextType" : "variable",
                  "element" : "extension",
                  "variable" : "extension"
                },
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e5"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "practitionerDataEnterer",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Practitioner"
                    }
                  ]
                },
                {
                  "context" : "practitionerDataEnterer",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid5",
                  "transform" : "uuid"
                },
                {
                  "context" : "e5",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid5"
                    }
                  ]
                },
                {
                  "context" : "practitionerRoleDataEnterer",
                  "contextType" : "variable",
                  "element" : "practitioner",
                  "variable" : "reference",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Reference"
                    }
                  ]
                },
                {
                  "context" : "reference",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid5"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "data",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "UrgentNotificationContactForResponseItems",
                      "variable" : ["item", "practitionerRoleDataEnterer", "practitionerDataEnterer"]
                    }
                  ]
                },
                {
                  "name" : "extension",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "ExtOrfUrgentNotificationContactForResponse",
                      "variable" : ["item", "practitionerRoleDataEnterer", "extension"]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "UrgentNotificationContactForRequestPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocument.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocument.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocument.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocument.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocument.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "UrgentNotificationContactForRequestItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'order.notificationContactDocument.practitioner')"
            }
          ],
          "dependent" : [
            {
              "name" : "UrgentNotificationContactForRequestPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        }
      ]
    },
    {
      "name" : "ExtOrfUrgentNotificationContactForRequest",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument"
                }
              ]
            }
          ]
        },
        {
          "name" : "practitionerRole",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %practitionerRole.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "UrgentNotificationContactForResponsePractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocumentResponse.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocumentResponse.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocumentResponse.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocumentResponse.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'order.notificationContactDocumentResponse.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "UrgentNotificationContactForResponseItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'order.notificationContactDocumentResponse.practitioner')"
            }
          ],
          "dependent" : [
            {
              "name" : "UrgentNotificationContactForResponsePractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        }
      ]
    },
    {
      "name" : "ExtOrfUrgentNotificationContactForResponse",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument"
                }
              ]
            }
          ]
        },
        {
          "name" : "practitionerRole",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %practitionerRole.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverOrganizationGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverOrganizationZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "receiverOrganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiver.organization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'receiver.practitioner')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitioner",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Practitioner"
                }
              ]
            },
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "practitioner",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'receiver.organization')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e3"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "organization",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Organization"
                }
              ]
            },
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid3",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "organization",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverOrganizationItems",
              "variable" : ["item", "organization"]
            }
          ]
        }
      ]
    },
    {
      "name" : "Consent",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "consentStatement",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'consent.statement') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "consent",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Consent"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "scope",
              "variable" : "scope"
            },
            {
              "context" : "scope",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "treatment"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://terminology.hl7.org/CodeSystem/consentscope"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "category",
              "variable" : "category"
            },
            {
              "context" : "category",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "59284-0"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://loinc.org"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "policyRule",
              "variable" : "policyRule"
            },
            {
              "context" : "policyRule",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "385432009"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://snomed.info/sct"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "consent",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extcode"
            },
            {
              "context" : "extcode",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentcode"
                }
              ]
            },
            {
              "context" : "extcode",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "cc",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "CodeableConcept"
                }
              ]
            },
            {
              "context" : "cc",
              "contextType" : "variable",
              "element" : "coding",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "itemAnswer",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "consentStatementNote",
                  "source" : [
                    {
                      "context" : "answer",
                      "element" : "item",
                      "variable" : "item",
                      "condition" : "((linkId.value = 'consent.statement.note') and answer.exists())"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "consent",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "extnote"
                    },
                    {
                      "context" : "extnote",
                      "contextType" : "variable",
                      "element" : "url",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-consentnote"
                        }
                      ]
                    },
                    {
                      "context" : "extnote",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "%item.answer.value"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverInit",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "receiver",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitionerRole",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "PractitionerRole"
                }
              ]
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverItems",
              "variable" : ["src", "bundle", "practitionerRole"]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "Initiatorpersonalrelation",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.personalrelation') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "ch-orf-personalrelation"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "Initiatorlegalrelation",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.legalrelation') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "ch-orf-legalrelation"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorPractitionerRoleItems",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId = 'initiator.practitionerRole')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitionerrole",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "PractitionerRole"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "practitionerrole",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "ch-orf-personorganization"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "data",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "InitiatorPractitionerRoleItems",
                  "variable" : ["item", "bundle", "practitionerrole"]
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorelatedPerson",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId = 'initiator.relatedPerson')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "relatedPerson",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "RelatedPerson"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "ch-orf-personorganization"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            },
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "patient",
              "variable" : "reference"
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "data",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "InitiatorRelatedPersonItems",
                  "variable" : ["item", "relatedPerson"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorRelatedPersonItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "relatedPerson",
          "type" : "RelatedPerson",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "Phone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.phone') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "InitiatorelatedPersonPhone",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "relatedPerson",
                  "contextType" : "variable",
                  "element" : "telecom",
                  "variable" : "value"
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "phone"
                    }
                  ]
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorelatedPersonEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "InitiatorelatedPersonStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorelatedPersonPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorelatedPersonCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorelatedPersonCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.relatedPerson.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorPractitionerRoleItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'initiator.practitionerRole.practitioner')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitioner",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Practitioner"
                }
              ]
            },
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "practitioner",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "InitiatorPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'initiator.practitionerRole.organization')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e3"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "organization",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Organization"
                }
              ]
            },
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid3",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "organization",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "InitiatorOrganizationItems",
              "variable" : ["item", "organization"]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRolePractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRolePractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRolePractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverPractitionerZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.practitioner.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.organization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.organization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "InitiatorractitionerRoleOrganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRoleOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.organization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRoleOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.organization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "InitiatorractitionerRoleOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'initiator.practitionerRole.organization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "FamilyDoctorInit",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "FamilyDoctorInit",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitionerRole",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "PractitionerRole"
                }
              ]
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "patient",
              "contextType" : "variable",
              "element" : "generalPractitioner",
              "variable" : "gp",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "gp",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'familydoctor.practitioner')"
                }
              ],
              "target" : [
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e2"
                },
                {
                  "context" : "e2",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "practitioner",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Practitioner"
                    }
                  ]
                },
                {
                  "context" : "practitioner",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid2",
                  "transform" : "uuid"
                },
                {
                  "context" : "practitionerRole",
                  "contextType" : "variable",
                  "element" : "practitioner",
                  "variable" : "reference",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Reference"
                    }
                  ]
                },
                {
                  "context" : "reference",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid2"
                    }
                  ]
                },
                {
                  "context" : "e2",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid2"
                    }
                  ]
                }
              ],
              "dependent" : [
                {
                  "name" : "FamilyDoctorPractitionerItems",
                  "variable" : ["item", "practitioner"]
                }
              ]
            },
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'familydoctor.organization')"
                }
              ],
              "target" : [
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e3"
                },
                {
                  "context" : "e3",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid3",
                  "transform" : "uuid"
                },
                {
                  "context" : "practitionerRole",
                  "contextType" : "variable",
                  "element" : "organization",
                  "variable" : "reference",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Reference"
                    }
                  ]
                },
                {
                  "context" : "reference",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid3"
                    }
                  ]
                },
                {
                  "context" : "e3",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "append",
                  "parameter" : [
                    {
                      "valueString" : "urn:uuid:"
                    },
                    {
                      "valueId" : "uuid3"
                    }
                  ]
                }
              ],
              "dependent" : [
                {
                  "name" : "FamilyDoctorOrganizationItems",
                  "variable" : ["item", "organization"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "FamilyDoctorPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorPractitionerGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorPractitionerZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorPractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "FamilyDoctorOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "familydoctorOrganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorOrganizationGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "familydoctorOrganizationZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'familydoctor.organization.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "AntecedentEpisodeOfCareInit",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "AntecedentEpisodeOfCareItems",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-antecedentepisodeofcare"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "episodeofcare",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "EpisodeOfCare"
                }
              ]
            },
            {
              "context" : "episodeofcare",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "episodeofcare",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "finished"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "ref",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "ref",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %episodeofcare.id"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "AntecedentEpisodeOfCareItems",
              "variable" : ["src", "bundle", "patient", "episodeofcare"]
            }
          ]
        }
      ]
    },
    {
      "name" : "AntecedentEpisodeOfCareItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "tgt",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "episodeofcare",
          "type" : "EpisodeOfCare",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "antecedentEpisodeOfCareRequestedPeriodStart",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.start') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "episodeofcare",
              "contextType" : "variable",
              "element" : "statusHistory",
              "variable" : "statusHistory"
            },
            {
              "context" : "statusHistory",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "finished"
                }
              ]
            },
            {
              "context" : "statusHistory",
              "contextType" : "variable",
              "element" : "period",
              "variable" : "period"
            },
            {
              "context" : "period",
              "contextType" : "variable",
              "element" : "start",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "period",
              "contextType" : "variable",
              "element" : "end",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "antecedentEpisodeOfCareEndNotSameAsStart",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "iteme",
                  "condition" : "((linkId.value = 'antecedentEpisodeOfCare.end') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "period",
                  "contextType" : "variable",
                  "element" : "end",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%iteme.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "antecedentEpisodeOfCareManagingOrganization",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'antecedentEpisodeOfCare.managingOrganization')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e3"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "organization",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Organization"
                }
              ]
            },
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid3",
              "transform" : "uuid"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            },
            {
              "context" : "episodeofcare",
              "contextType" : "variable",
              "element" : "patient",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %tgt.id"
                }
              ]
            },
            {
              "context" : "episodeofcare",
              "contextType" : "variable",
              "element" : "managingOrganization",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "AntecedentEpisodeOfCareOrganizationItems",
              "variable" : ["item", "organization"]
            }
          ]
        }
      ]
    },
    {
      "name" : "AntecedentEpisodeOfCareOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.managingOrganization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.managingOrganization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "antecedentEpisodeOfCareorganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.managingOrganization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.managingOrganization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'antecedentEpisodeOfCare.managingOrganization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "InitiatorInit",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "receiver",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "InitiatorItems",
              "variable" : ["src", "bundle", "patient", "ext"]
            }
          ]
        }
      ]
    },
    {
      "name" : "PatientItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "tgt",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "grpfamily",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "grp",
              "condition" : "linkId = 'familydoctor'"
            }
          ],
          "dependent" : [
            {
              "name" : "FamilyDoctorInit",
              "variable" : ["grp", "bundle", "tgt", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item"
            }
          ],
          "dependent" : [
            {
              "name" : "PatientItems",
              "variable" : ["item", "bundle", "tgt", "composition", "serviceRequest"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "patientName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.maidenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "use",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "maiden"
                }
              ]
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "patientName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientLocalPid",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.localPid') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "localpid"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://terminology.hl7.org/CodeSystem/v2-0203"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "MR"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientLocalPidDomain",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.localPidDomain') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value",
              "listMode" : ["share"],
              "listRuleId" : "localpid"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.birthDate') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "birthDate",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.gender') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "gender",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value.code"
                }
              ]
            }
          ]
        },
        {
          "name" : "patientMaritalStatus",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.maritalStatus') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answer",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "maritalStatus",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "tgt",
                      "contextType" : "variable",
                      "element" : "maritalStatus",
                      "variable" : "maritalStatus"
                    },
                    {
                      "context" : "maritalStatus",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.phone') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "PatientPhone",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "tgt",
                  "contextType" : "variable",
                  "element" : "telecom",
                  "variable" : "value"
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "phone"
                    }
                  ]
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "PatientStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "PatientLanguageOfCorrespondence",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'patient.languageOfCorrespondence') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "answer",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "rule" : [
                {
                  "name" : "languageOfCorrespondence",
                  "source" : [
                    {
                      "context" : "answer",
                      "type" : "Coding",
                      "element" : "value",
                      "variable" : "coding"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "tgt",
                      "contextType" : "variable",
                      "element" : "communication",
                      "variable" : "communication"
                    },
                    {
                      "context" : "communication",
                      "contextType" : "variable",
                      "element" : "preferred",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueBoolean" : true
                        }
                      ]
                    },
                    {
                      "context" : "communication",
                      "contextType" : "variable",
                      "element" : "language",
                      "variable" : "language"
                    },
                    {
                      "context" : "language",
                      "contextType" : "variable",
                      "element" : "coding",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueId" : "coding"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "contact",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'patient.contactperson')"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "contact",
              "variable" : "contact"
            }
          ],
          "rule" : [
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'patient.contactperson.familyName') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "contact",
                  "contextType" : "variable",
                  "element" : "name",
                  "variable" : "name",
                  "listMode" : ["share"],
                  "listRuleId" : "contactName"
                },
                {
                  "context" : "name",
                  "contextType" : "variable",
                  "element" : "family",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "item",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'patient.contactperson.givenName') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "contact",
                  "contextType" : "variable",
                  "element" : "name",
                  "variable" : "name",
                  "listMode" : ["share"],
                  "listRuleId" : "contactName"
                },
                {
                  "context" : "name",
                  "contextType" : "variable",
                  "element" : "given",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "PatientContactpersonPhone",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'patient.contactperson.phone') and answer.exists())"
                }
              ],
              "rule" : [
                {
                  "name" : "PatientPhone",
                  "source" : [
                    {
                      "context" : "item",
                      "element" : "answer",
                      "variable" : "answer"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "tgt",
                      "contextType" : "variable",
                      "element" : "telecom",
                      "variable" : "value"
                    },
                    {
                      "context" : "value",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "phone"
                        }
                      ]
                    },
                    {
                      "context" : "value",
                      "contextType" : "variable",
                      "element" : "value",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "%answer.value"
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "name" : "PatientEmail",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'patient.contactperson.email') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "contact",
                  "contextType" : "variable",
                  "element" : "telecom",
                  "variable" : "value"
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "email"
                    }
                  ]
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "PatientContactpersonRelationship",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'patient.contactperson.relationship') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "contact",
                  "contextType" : "variable",
                  "element" : "relationship",
                  "variable" : "relationship"
                },
                {
                  "context" : "relationship",
                  "contextType" : "variable",
                  "element" : "text",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "RequestedEncounterItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "RequestedEncounterItems",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "encounter",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Encounter"
                }
              ]
            },
            {
              "context" : "encounter",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "encounter",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "planned"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "encounter",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "requestedEncounterClass",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'requestedEncounter.class') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "encounter",
                  "contextType" : "variable",
                  "element" : "class",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "requestedEncounterDesiredAccommodation",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'requestedEncounter.desiredAccommodation') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "encounter",
                  "contextType" : "variable",
                  "element" : "extension",
                  "variable" : "extension"
                },
                {
                  "context" : "extension",
                  "contextType" : "variable",
                  "element" : "url",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation"
                    }
                  ]
                },
                {
                  "context" : "extension",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "Coverage",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "coverageBeneficiary",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.beneficiary')"
            }
          ],
          "rule" : [
            {
              "name" : "coverageBeneficiaryAhvn13",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.beneficiary.ahvn13') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "patient",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "urn:oid:2.16.756.5.32"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coveragekvg",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.kvg')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "1"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coverageKvgName",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.kvg.name') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "coverageKvgInsuranceCardNumber",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.kvg.insuranceCardNumber') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "typeid"
                },
                {
                  "context" : "typeid",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "VeKa"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageuvg",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.uvg')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coverageUvgName",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.uvg.name') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "coverageUvgClaimNumber",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.uvg.claimNumber') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "typeid"
                },
                {
                  "context" : "typeid",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "Claim"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coveragevvg",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.vvg')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "ZV"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coverageVvgName",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.vvg.name') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "coverageVvgInsuranceCardNumber",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.vvg.insuranceCardNumber') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "typeid"
                },
                {
                  "context" : "typeid",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "VeKa"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageiv",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.iv')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "2"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coverageivverfuegungsnummer",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.iv.verfuegungsnummer') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "typeid"
                },
                {
                  "context" : "typeid",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "IV"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "IV"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coveragemv",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.mv')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "3"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coveragemvversichertennummer",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.mv.versichertennummer') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "typeid"
                },
                {
                  "context" : "typeid",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "MV"
                    }
                  ]
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "MV"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "self",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.self')"
            }
          ],
          "rule" : [
            {
              "name" : "payor",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.self.patient') and answer.exists() and answer.value)"
                }
              ],
              "target" : [
                {
                  "context" : "bundle",
                  "contextType" : "variable",
                  "element" : "entry",
                  "variable" : "e4"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "resource",
                  "variable" : "coverage",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Coverage"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "id",
                  "variable" : "uuid4",
                  "transform" : "uuid"
                },
                {
                  "context" : "e4",
                  "contextType" : "variable",
                  "element" : "fullUrl",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "'urn:uuid:' + %uuid4"
                    }
                  ]
                },
                {
                  "context" : "serviceRequest",
                  "contextType" : "variable",
                  "element" : "insurance",
                  "variable" : "insurance"
                },
                {
                  "context" : "insurance",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "'urn:uuid:' + %uuid4"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "status",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "active"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "beneficiary",
                  "variable" : "subject",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Reference"
                    }
                  ]
                },
                {
                  "context" : "subject",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "'urn:uuid:' + %patient.id"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "type",
                  "variable" : "type"
                },
                {
                  "context" : "type",
                  "contextType" : "variable",
                  "element" : "coding",
                  "variable" : "coding"
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                    }
                  ]
                },
                {
                  "context" : "coding",
                  "contextType" : "variable",
                  "element" : "code",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "5"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "subject"
                },
                {
                  "context" : "subject",
                  "contextType" : "variable",
                  "element" : "reference",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "'urn:uuid:' + %patient.id"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "coverageselfpatientrelated",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item2",
                  "condition" : "((linkId.value = 'coverage.self.patientRelatedPerson') and answer.exists() and answer.value)"
                }
              ],
              "rule" : [
                {
                  "name" : "coverageselfrelatedPerson",
                  "source" : [
                    {
                      "context" : "item",
                      "element" : "item",
                      "variable" : "item",
                      "condition" : "(linkId.value = 'coverage.self.relatedPerson')"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e5"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "coverage",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Coverage"
                        }
                      ]
                    },
                    {
                      "context" : "coverage",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid4",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid4"
                        }
                      ]
                    },
                    {
                      "context" : "serviceRequest",
                      "contextType" : "variable",
                      "element" : "insurance",
                      "variable" : "insurance"
                    },
                    {
                      "context" : "insurance",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid4"
                        }
                      ]
                    },
                    {
                      "context" : "coverage",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "active"
                        }
                      ]
                    },
                    {
                      "context" : "coverage",
                      "contextType" : "variable",
                      "element" : "beneficiary",
                      "variable" : "subject",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Reference"
                        }
                      ]
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    },
                    {
                      "context" : "coverage",
                      "contextType" : "variable",
                      "element" : "type",
                      "variable" : "type"
                    },
                    {
                      "context" : "type",
                      "contextType" : "variable",
                      "element" : "coding",
                      "variable" : "coding"
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "system",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                        }
                      ]
                    },
                    {
                      "context" : "coding",
                      "contextType" : "variable",
                      "element" : "code",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "5"
                        }
                      ]
                    },
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e6"
                    },
                    {
                      "context" : "e6",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "relatedPerson",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "RelatedPerson"
                        }
                      ]
                    },
                    {
                      "context" : "relatedPerson",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid6",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e6",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "append",
                      "parameter" : [
                        {
                          "valueString" : "urn:uuid:"
                        },
                        {
                          "valueId" : "uuid6"
                        }
                      ]
                    },
                    {
                      "context" : "coverage",
                      "contextType" : "variable",
                      "element" : "payor",
                      "variable" : "subject"
                    },
                    {
                      "context" : "subject",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %relatedPerson.id"
                        }
                      ]
                    },
                    {
                      "context" : "relatedPerson",
                      "contextType" : "variable",
                      "element" : "patient",
                      "variable" : "reference"
                    },
                    {
                      "context" : "reference",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %patient.id"
                        }
                      ]
                    }
                  ],
                  "dependent" : [
                    {
                      "name" : "CoverageRelatedPersonItems",
                      "variable" : ["item", "relatedPerson"]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coveragevvg",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "where(linkId.value = 'coverage.other')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "coverage",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Coverage"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "insurance",
              "variable" : "insurance"
            },
            {
              "context" : "insurance",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "beneficiary",
              "variable" : "subject",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "subject",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "coverage",
              "contextType" : "variable",
              "element" : "type",
              "variable" : "type"
            },
            {
              "context" : "type",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "8"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "coverageOtherName",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.other.name') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "payor",
                  "variable" : "payor"
                },
                {
                  "context" : "payor",
                  "contextType" : "variable",
                  "element" : "reference",
                  "variable" : "refcontained"
                },
                {
                  "context" : "refcontained",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "#org"
                    }
                  ]
                },
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "contained",
                  "variable" : "organization",
                  "transform" : "create",
                  "parameter" : [
                    {
                      "valueString" : "Organization"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "id",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "org"
                    }
                  ]
                },
                {
                  "context" : "organization",
                  "contextType" : "variable",
                  "element" : "name",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "coverageOtherId",
              "source" : [
                {
                  "context" : "item",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'coverage.other.id') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "coverage",
                  "contextType" : "variable",
                  "element" : "identifier",
                  "variable" : "identifier"
                },
                {
                  "context" : "identifier",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "CoverageRelatedPersonItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "relatedPerson",
          "type" : "RelatedPerson",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "Phone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.phone') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "coverageSelfRelatedPersonPhone",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "relatedPerson",
                  "contextType" : "variable",
                  "element" : "telecom",
                  "variable" : "value"
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "phone"
                    }
                  ]
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageSelfRelatedPersonEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "coverageSelfRelatedPersonStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageSelfRelatedPersonPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageSelfRelatedPersonCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "coverageSelfRelatedPersonCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'coverage.self.relatedPerson.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderAuthorPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderAuthorOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationGln",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.gln') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.51.1.3"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationZsr",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.zsr') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "identifier",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "senderAuthorOrganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.author.organization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderAuthorItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'sender.author.practitioner')"
            }
          ],
          "dependent" : [
            {
              "name" : "SenderAuthorPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'sender.author.organization')"
            }
          ],
          "dependent" : [
            {
              "name" : "SenderAuthorOrganizationItems",
              "variable" : ["item", "organization"]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderDataEntererPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.dataenterer.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.dataenterer.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.dataenterer.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "senderAuthorPractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'sender.dataenterer.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderDataEntererItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'sender.dataenterer.practitioner')"
            }
          ],
          "dependent" : [
            {
              "name" : "SenderDataEntererPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        }
      ]
    },
    {
      "name" : "ChExtEprDataEnterer",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
                }
              ]
            }
          ]
        },
        {
          "name" : "practitionerRole",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "enterer"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %practitionerRole.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "SenderAuthorInit",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "sender",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitionerRole",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "PractitionerRole"
                }
              ]
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid",
              "transform" : "uuid"
            },
            {
              "context" : "e",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitioner",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Practitioner"
                }
              ]
            },
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e3"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "organization",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Organization"
                }
              ]
            },
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid3",
              "transform" : "uuid"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "author",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "requester",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid"
                }
              ]
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "practitioner",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "organization",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "senderAuthor",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'sender.author')"
                }
              ],
              "dependent" : [
                {
                  "name" : "SenderAuthorItems",
                  "variable" : ["item", "practitionerRole", "practitioner", "organization"]
                }
              ]
            },
            {
              "name" : "senderDataenterer",
              "source" : [
                {
                  "context" : "src",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'sender.dataenterer')"
                }
              ],
              "rule" : [
                {
                  "name" : "senderDataentererItems",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e4"
                    },
                    {
                      "context" : "e4",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "practitionerRoleDataEnterer",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "PractitionerRole"
                        }
                      ]
                    },
                    {
                      "context" : "practitionerRoleDataEnterer",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid4",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e4",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "append",
                      "parameter" : [
                        {
                          "valueString" : "urn:uuid:"
                        },
                        {
                          "valueId" : "uuid4"
                        }
                      ]
                    },
                    {
                      "context" : "composition",
                      "contextType" : "variable",
                      "element" : "extension",
                      "variable" : "extension"
                    },
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e5"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "practitionerDataEnterer",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Practitioner"
                        }
                      ]
                    },
                    {
                      "context" : "practitionerDataEnterer",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid5",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "append",
                      "parameter" : [
                        {
                          "valueString" : "urn:uuid:"
                        },
                        {
                          "valueId" : "uuid5"
                        }
                      ]
                    },
                    {
                      "context" : "practitionerRoleDataEnterer",
                      "contextType" : "variable",
                      "element" : "practitioner",
                      "variable" : "reference",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Reference"
                        }
                      ]
                    },
                    {
                      "context" : "reference",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "append",
                      "parameter" : [
                        {
                          "valueString" : "urn:uuid:"
                        },
                        {
                          "valueId" : "uuid5"
                        }
                      ]
                    },
                    {
                      "context" : "practitionerRoleDataEnterer",
                      "contextType" : "variable",
                      "element" : "organization",
                      "variable" : "reference",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Reference"
                        }
                      ]
                    },
                    {
                      "context" : "reference",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "append",
                      "parameter" : [
                        {
                          "valueString" : "urn:uuid:"
                        },
                        {
                          "valueId" : "uuid3"
                        }
                      ]
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "data",
                      "source" : [
                        {
                          "context" : "item"
                        }
                      ],
                      "dependent" : [
                        {
                          "name" : "SenderDataEntererItems",
                          "variable" : [
                            "item",
                            "practitionerRoleDataEnterer",
                            "practitionerDataEnterer",
                            "organization"
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "extension",
                      "source" : [
                        {
                          "context" : "item"
                        }
                      ],
                      "dependent" : [
                        {
                          "name" : "ChExtEprDataEnterer",
                          "variable" : ["item", "practitionerRoleDataEnterer", "extension"]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverCopyRelatedPersonItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "relatedPerson",
          "type" : "RelatedPerson",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "name"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "Phone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.phone') and answer.exists())"
            }
          ],
          "rule" : [
            {
              "name" : "receiverCopyRelatedPersonPhone",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "relatedPerson",
                  "contextType" : "variable",
                  "element" : "telecom",
                  "variable" : "value"
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "system",
                  "transform" : "copy",
                  "parameter" : [
                    {
                      "valueString" : "phone"
                    }
                  ]
                },
                {
                  "context" : "value",
                  "contextType" : "variable",
                  "element" : "value",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyRelatedPersonEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "receiverCopyRelatedPersonStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyRelatedPersonPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyRelatedPersonCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyRelatedPersonCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.relatedPerson.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverCopyPractitionerItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "practitioner",
          "type" : "Practitioner",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.practitioner.familyName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "family",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.practitioner.givenName') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "given",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRolePractitionerTitle",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.practitioner.title') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "name",
              "variable" : "name",
              "listMode" : ["share"],
              "listRuleId" : "practitionerName"
            },
            {
              "context" : "name",
              "contextType" : "variable",
              "element" : "prefix",
              "variable" : "prefix",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            },
            {
              "context" : "prefix",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "ext"
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier"
                }
              ]
            },
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "value",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "code"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "AC"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRolePractitionerPhone",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.practitioner.phone') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "phone"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRolePractitionerEmail",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.practitioner.email') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "telecom",
              "variable" : "value"
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "email"
                }
              ]
            },
            {
              "context" : "value",
              "contextType" : "variable",
              "element" : "value",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverCopyOrganizationItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "organization",
          "type" : "Organization",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.organization.name') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "name",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "itemAnswer",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.organization.streetAddressLine') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            }
          ],
          "rule" : [
            {
              "name" : "receiverCopyPractitionerRoleOrganizationStreetAddressLine",
              "source" : [
                {
                  "context" : "item",
                  "element" : "answer",
                  "variable" : "answer"
                }
              ],
              "target" : [
                {
                  "context" : "address",
                  "contextType" : "variable",
                  "element" : "line",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%answer.value"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRoleOrganizationPostalCode",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.organization.postalCode') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "postalCode",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRoleOrganizationCity",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.organization.city') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "city",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPractitionerRoleOrganizationCountry",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId.value = 'receiverCopy.practitionerRole.organization.country') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "address",
              "variable" : "address",
              "listMode" : ["share"],
              "listRuleId" : "orgAddress"
            },
            {
              "context" : "address",
              "contextType" : "variable",
              "element" : "country",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverCopyPractitionerRoleItems",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "practitionerRole",
          "type" : "PractitionerRole",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'receiverCopy.practitionerRole.practitioner')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e2"
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitioner",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Practitioner"
                }
              ]
            },
            {
              "context" : "practitioner",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid2",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "practitioner",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            },
            {
              "context" : "e2",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid2"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverCopyPractitionerItems",
              "variable" : ["item", "practitioner"]
            }
          ]
        },
        {
          "name" : "item",
          "source" : [
            {
              "context" : "src",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId.value = 'receiverCopy.practitionerRole.organization')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e3"
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "organization",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Organization"
                }
              ]
            },
            {
              "context" : "organization",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid3",
              "transform" : "uuid"
            },
            {
              "context" : "practitionerRole",
              "contextType" : "variable",
              "element" : "organization",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            },
            {
              "context" : "e3",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid3"
                }
              ]
            }
          ],
          "dependent" : [
            {
              "name" : "ReceiverCopyOrganizationItems",
              "variable" : ["item", "organization"]
            }
          ]
        }
      ]
    },
    {
      "name" : "ExtOrfCopyReceiverPatient",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver"
                }
              ]
            }
          ]
        },
        {
          "name" : "patient",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ExtOrfCopyReceiverPractitionerRole",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "res",
          "type" : "PractitionerRole",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver"
                }
              ]
            }
          ]
        },
        {
          "name" : "organization",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %res.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ExtOrfCopyReceiverRelatedPerson",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "src",
          "mode" : "source"
        },
        {
          "name" : "res",
          "type" : "RelatedPerson",
          "mode" : "target"
        },
        {
          "name" : "ext",
          "type" : "Extension",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "url",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver"
                }
              ]
            }
          ]
        },
        {
          "name" : "organization",
          "source" : [
            {
              "context" : "src"
            }
          ],
          "target" : [
            {
              "context" : "ext",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %res.id"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "ReceiverCopy",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "grp",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "receiverCopyPractitionerRole1",
          "source" : [
            {
              "context" : "grp",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId = 'receiverCopy.practitionerRole')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "practitionerrole",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "PractitionerRole"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "practitionerrole",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "data",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "ReceiverCopyPractitionerRoleItems",
                  "variable" : ["item", "bundle", "practitionerrole"]
                }
              ]
            },
            {
              "name" : "extension",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "ExtOrfCopyReceiverPractitionerRole",
                  "variable" : ["item", "practitionerrole", "extension"]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyPatient",
          "source" : [
            {
              "context" : "grp",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId = 'receiverCopy.patient')"
            }
          ],
          "target" : [
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            }
          ],
          "rule" : [
            {
              "name" : "extension",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "ExtOrfCopyReceiverPatient",
                  "variable" : ["item", "patient", "extension"]
                }
              ]
            }
          ]
        },
        {
          "name" : "receiverCopyRelatedPerson",
          "source" : [
            {
              "context" : "grp",
              "element" : "item",
              "variable" : "item",
              "condition" : "(linkId = 'receiverCopy.relatedPerson')"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "relatedPerson",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "RelatedPerson"
                }
              ]
            },
            {
              "context" : "composition",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "relatedPerson",
              "contextType" : "variable",
              "element" : "patient",
              "variable" : "reference"
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "append",
              "parameter" : [
                {
                  "valueString" : "urn:uuid:"
                },
                {
                  "valueId" : "uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "data",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "ReceiverCopyRelatedPersonItems",
                  "variable" : ["item", "relatedPerson"]
                }
              ]
            },
            {
              "name" : "extension",
              "source" : [
                {
                  "context" : "item"
                }
              ],
              "dependent" : [
                {
                  "name" : "ExtOrfCopyReceiverRelatedPerson",
                  "variable" : ["item", "relatedPerson", "extension"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "Appointment",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "grp",
          "mode" : "source"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "Appointment",
          "source" : [
            {
              "context" : "grp"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "e4"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "resource",
              "variable" : "appointment",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Appointment"
                }
              ]
            },
            {
              "context" : "appointment",
              "contextType" : "variable",
              "element" : "id",
              "variable" : "uuid4",
              "transform" : "uuid"
            },
            {
              "context" : "e4",
              "contextType" : "variable",
              "element" : "fullUrl",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            },
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "extension",
              "variable" : "extension"
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "url",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-locationandtime"
                }
              ]
            },
            {
              "context" : "extension",
              "contextType" : "variable",
              "element" : "value",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %uuid4"
                }
              ]
            }
          ],
          "rule" : [
            {
              "name" : "proposed",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'appointment.status') and (answer.value.code = 'proposed'))"
                }
              ],
              "target" : [
                {
                  "context" : "appointment",
                  "contextType" : "variable",
                  "element" : "status",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value.code"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "appointmentRequestedPeriod",
                  "source" : [
                    {
                      "context" : "grp",
                      "element" : "item",
                      "variable" : "itemp",
                      "condition" : "(linkId.value = 'appointment.requestedPeriod')"
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "appointmentRequestedPeriodStart",
                      "source" : [
                        {
                          "context" : "itemp",
                          "element" : "item",
                          "variable" : "item2",
                          "condition" : "((linkId.value = 'appointment.requestedPeriod.start') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "appointment",
                          "contextType" : "variable",
                          "element" : "requestedPeriod",
                          "variable" : "requestedPeriod"
                        },
                        {
                          "context" : "requestedPeriod",
                          "contextType" : "variable",
                          "element" : "start",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item2.answer.value"
                            }
                          ]
                        },
                        {
                          "context" : "requestedPeriod",
                          "contextType" : "variable",
                          "element" : "end",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item2.answer.value"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "appointmentRequestedPeriodendifnotsameasstart",
                          "source" : [
                            {
                              "context" : "itemp",
                              "element" : "item",
                              "variable" : "item3",
                              "condition" : "((linkId.value = 'appointment.requestedPeriod.end') and answer.exists())"
                            }
                          ],
                          "target" : [
                            {
                              "context" : "requestedPeriod",
                              "contextType" : "variable",
                              "element" : "end",
                              "transform" : "evaluate",
                              "parameter" : [
                                {
                                  "valueString" : "%item3.answer.value"
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "name" : "pendingorbooked",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'appointment.status') and ((answer.value.code = 'pending') or (answer.value.code = 'booked')))"
                }
              ],
              "target" : [
                {
                  "context" : "appointment",
                  "contextType" : "variable",
                  "element" : "status",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value.code"
                    }
                  ]
                }
              ],
              "rule" : [
                {
                  "name" : "appointmentStartend",
                  "source" : [
                    {
                      "context" : "grp",
                      "element" : "item",
                      "variable" : "itemp",
                      "condition" : "(linkId.value = 'appointment.requestedPeriod')"
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "appointmentStart",
                      "source" : [
                        {
                          "context" : "itemp",
                          "element" : "item",
                          "variable" : "item2",
                          "condition" : "((linkId.value = 'appointment.requestedPeriod.start') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "appointment",
                          "contextType" : "variable",
                          "element" : "start",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item2.answer.value"
                            }
                          ]
                        },
                        {
                          "context" : "appointment",
                          "contextType" : "variable",
                          "element" : "end",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item2.answer.value"
                            }
                          ]
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "appointmentendifnotsameasstart",
                          "source" : [
                            {
                              "context" : "itemp",
                              "element" : "item",
                              "variable" : "item3",
                              "condition" : "((linkId.value = 'appointment.requestedPeriod.end') and answer.exists())"
                            }
                          ],
                          "target" : [
                            {
                              "context" : "appointment",
                              "contextType" : "variable",
                              "element" : "end",
                              "transform" : "evaluate",
                              "parameter" : [
                                {
                                  "valueString" : "%item3.answer.value"
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "name" : "appointmentPatientInstruction",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "((linkId.value = 'appointment.patientInstruction') and answer.exists())"
                }
              ],
              "target" : [
                {
                  "context" : "appointment",
                  "contextType" : "variable",
                  "element" : "patientInstruction",
                  "transform" : "evaluate",
                  "parameter" : [
                    {
                      "valueString" : "%item.answer.value"
                    }
                  ]
                }
              ]
            },
            {
              "name" : "appointmentLocation",
              "source" : [
                {
                  "context" : "grp",
                  "element" : "item",
                  "variable" : "item",
                  "condition" : "(linkId.value = 'appointment.location')"
                }
              ],
              "rule" : [
                {
                  "name" : "location",
                  "source" : [
                    {
                      "context" : "item"
                    }
                  ],
                  "target" : [
                    {
                      "context" : "bundle",
                      "contextType" : "variable",
                      "element" : "entry",
                      "variable" : "e5"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "resource",
                      "variable" : "location",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Location"
                        }
                      ]
                    },
                    {
                      "context" : "location",
                      "contextType" : "variable",
                      "element" : "id",
                      "variable" : "uuid5",
                      "transform" : "uuid"
                    },
                    {
                      "context" : "e5",
                      "contextType" : "variable",
                      "element" : "fullUrl",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %uuid5"
                        }
                      ]
                    },
                    {
                      "context" : "appointment",
                      "contextType" : "variable",
                      "element" : "participant",
                      "variable" : "participant"
                    },
                    {
                      "context" : "participant",
                      "contextType" : "variable",
                      "element" : "status",
                      "transform" : "copy",
                      "parameter" : [
                        {
                          "valueString" : "tentative"
                        }
                      ]
                    },
                    {
                      "context" : "participant",
                      "contextType" : "variable",
                      "element" : "actor",
                      "variable" : "actor",
                      "transform" : "create",
                      "parameter" : [
                        {
                          "valueString" : "Reference"
                        }
                      ]
                    },
                    {
                      "context" : "actor",
                      "contextType" : "variable",
                      "element" : "reference",
                      "transform" : "evaluate",
                      "parameter" : [
                        {
                          "valueString" : "'urn:uuid:' + %location.id"
                        }
                      ]
                    }
                  ],
                  "rule" : [
                    {
                      "name" : "item",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.name') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "name",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentLocationPhone",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.phone') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "telecom",
                          "variable" : "value"
                        },
                        {
                          "context" : "value",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "phone"
                            }
                          ]
                        },
                        {
                          "context" : "value",
                          "contextType" : "variable",
                          "element" : "value",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentLocationEmail",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.email') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "telecom",
                          "variable" : "value"
                        },
                        {
                          "context" : "value",
                          "contextType" : "variable",
                          "element" : "system",
                          "transform" : "copy",
                          "parameter" : [
                            {
                              "valueString" : "email"
                            }
                          ]
                        },
                        {
                          "context" : "value",
                          "contextType" : "variable",
                          "element" : "value",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentLocationStreetAddressLine",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.streetAddressLine') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "address",
                          "variable" : "address",
                          "listMode" : ["share"],
                          "listRuleId" : "orgAddress"
                        }
                      ],
                      "rule" : [
                        {
                          "name" : "line",
                          "source" : [
                            {
                              "context" : "item",
                              "element" : "answer",
                              "variable" : "answer"
                            }
                          ],
                          "target" : [
                            {
                              "context" : "address",
                              "contextType" : "variable",
                              "element" : "line",
                              "transform" : "evaluate",
                              "parameter" : [
                                {
                                  "valueString" : "%answer.value"
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentLocationPostalCode",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.postalCode') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "address",
                          "variable" : "address",
                          "listMode" : ["share"],
                          "listRuleId" : "orgAddress"
                        },
                        {
                          "context" : "address",
                          "contextType" : "variable",
                          "element" : "postalCode",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentlocationCity",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.city') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "address",
                          "variable" : "address",
                          "listMode" : ["share"],
                          "listRuleId" : "orgAddress"
                        },
                        {
                          "context" : "address",
                          "contextType" : "variable",
                          "element" : "city",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    },
                    {
                      "name" : "appointmentLocationCountry",
                      "source" : [
                        {
                          "context" : "item",
                          "element" : "item",
                          "variable" : "item3",
                          "condition" : "((linkId.value = 'appointment.location.country') and answer.exists())"
                        }
                      ],
                      "target" : [
                        {
                          "context" : "location",
                          "contextType" : "variable",
                          "element" : "address",
                          "variable" : "address",
                          "listMode" : ["share"],
                          "listRuleId" : "orgAddress"
                        },
                        {
                          "context" : "address",
                          "contextType" : "variable",
                          "element" : "country",
                          "transform" : "evaluate",
                          "parameter" : [
                            {
                              "valueString" : "%item3.answer.value"
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "Note",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "grp",
          "mode" : "source"
        },
        {
          "name" : "serviceRequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "noteText",
          "source" : [
            {
              "context" : "grp",
              "element" : "item",
              "variable" : "item",
              "condition" : "((linkId = 'note.text') and answer.exists())"
            }
          ],
          "target" : [
            {
              "context" : "serviceRequest",
              "contextType" : "variable",
              "element" : "note",
              "variable" : "note"
            },
            {
              "context" : "note",
              "contextType" : "variable",
              "element" : "text",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "%item.answer.value"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name" : "QrToBundle",
      "typeMode" : "none",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponseSource",
          "mode" : "source"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "questionnaireresp",
          "type" : "QuestionnaireResponse",
          "mode" : "target"
        },
        {
          "name" : "servicerequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        },
        {
          "name" : "composition",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "id",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "id",
              "transform" : "uuid"
            }
          ]
        },
        {
          "name" : "type",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "bundle",
              "contextType" : "variable",
              "element" : "type",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "document"
                }
              ]
            }
          ]
        },
        {
          "name" : "composition",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "dependent" : [
            {
              "name" : "OrfComposition",
              "variable" : [
                "qr",
                "composition",
                "patient",
                "questionnaireresp",
                "servicerequest",
                "bundle"
              ]
            }
          ]
        },
        {
          "name" : "qrgroups",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "dependent" : [
            {
              "name" : "QrToGroups",
              "variable" : ["qr", "patient", "bundle", "composition", "servicerequest"]
            }
          ]
        }
      ]
    },
    {
      "name" : "OrfComposition",
      "typeMode" : "none",
      "documentation" : "group OrfComposition(source qr : QuestionnaireResponseSource, target q: Questionnaire, target tgt : Composition, target patient: Patient, target questionnaireresp: QuestionnaireResponse, target servicerequest: ServiceRequest, target bundle : Bundle) {",
      "input" : [
        {
          "name" : "qr",
          "type" : "QuestionnaireResponseSource",
          "mode" : "source"
        },
        {
          "name" : "tgt",
          "type" : "Composition",
          "mode" : "target"
        },
        {
          "name" : "patient",
          "type" : "Patient",
          "mode" : "target"
        },
        {
          "name" : "questionnaireresp",
          "type" : "QuestionnaireResponse",
          "mode" : "target"
        },
        {
          "name" : "servicerequest",
          "type" : "ServiceRequest",
          "mode" : "target"
        },
        {
          "name" : "bundle",
          "type" : "Bundle",
          "mode" : "target"
        }
      ],
      "rule" : [
        {
          "name" : "status",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "final"
                }
              ]
            }
          ]
        },
        {
          "name" : "subject",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
                }
              ]
            }
          ]
        },
        {
          "name" : "sections",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "tgt",
              "contextType" : "variable",
              "element" : "section",
              "variable" : "tgtSection"
            },
            {
              "context" : "tgtSection",
              "contextType" : "variable",
              "element" : "title",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Order-Referral"
                }
              ]
            },
            {
              "context" : "tgtSection",
              "contextType" : "variable",
              "element" : "code",
              "variable" : "code"
            },
            {
              "context" : "code",
              "contextType" : "variable",
              "element" : "coding",
              "variable" : "coding"
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "system",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "http://loinc.org"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "code",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "93037-0"
                }
              ]
            },
            {
              "context" : "coding",
              "contextType" : "variable",
              "element" : "display",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "Portable medical order form"
                }
              ]
            },
            {
              "context" : "tgtSection",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %questionnaireresp.id"
                }
              ]
            },
            {
              "context" : "tgtSection",
              "contextType" : "variable",
              "element" : "entry",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %servicerequest.id"
                }
              ]
            }
          ]
        },
        {
          "name" : "servicerequest",
          "source" : [
            {
              "context" : "qr"
            }
          ],
          "target" : [
            {
              "context" : "servicerequest",
              "contextType" : "variable",
              "element" : "status",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "active"
                }
              ]
            },
            {
              "context" : "servicerequest",
              "contextType" : "variable",
              "element" : "intent",
              "transform" : "copy",
              "parameter" : [
                {
                  "valueString" : "order"
                }
              ]
            },
            {
              "context" : "servicerequest",
              "contextType" : "variable",
              "element" : "subject",
              "variable" : "reference",
              "transform" : "create",
              "parameter" : [
                {
                  "valueString" : "Reference"
                }
              ]
            },
            {
              "context" : "reference",
              "contextType" : "variable",
              "element" : "reference",
              "transform" : "evaluate",
              "parameter" : [
                {
                  "valueString" : "'urn:uuid:' + %patient.id"
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
