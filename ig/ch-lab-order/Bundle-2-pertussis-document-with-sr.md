# Pertussis - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pertussis**

## Example Bundle: Pertussis



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "2-pertussis-document-with-sr",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
    ]
  },
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:26d3dff7-ab05-4737-a49c-5eccd33595f8"
  },
  "type" : "document",
  "timestamp" : "2019-04-01T20:18:41.341+00:00",
  "entry" : [
    {
      "fullUrl" : "http://example.com/fhir/Composition/2-pertussis-with-sr",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "2-pertussis-with-sr",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr"
          ]
        },
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Composition_2-pertussis-with-sr\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition 2-pertussis-with-sr</b></p><a name=\"2-pertussis-with-sr\"> </a><a name=\"hc2-pertussis-with-sr\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-composition-with-sr.html\">CH LAB-Order Composition with ServiceRequest</a></p></div><p><b>CH ORF Urgent Notification Contact For The Response To This Document</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#PractitionerRole_EvaErlenmeyerLaborPipette\">PractitionerRole: identifier = urn:oid:2.16.756.5.30.1.123.100.2.1.1#K333333</a></p><p><b>CH ORF Copy Receiver</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#PractitionerRole_MarcMustermannGruppenpraxis\">PractitionerRole</a></p><p><b>CH ORF Copy Receiver</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 721965002}\">Laboratory order (record artifact)</span></p><p><b>category</b>: <span title=\"Codes:{http://snomed.info/sct 721963009}\">Order (record artifact)</span></p><p><b>date</b>: 2020-03-31 11:46:09+0200</p><p><b>author</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#PractitionerRole_PeterPrestoGruppenpraxis\">PractitionerRole</a></p><p><b>title</b>: Laboratory Order 2-pertussis with Service Request</p></div>"
        },
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument",
            "valueReference" : {
              "reference" : "PractitionerRole/EvaErlenmeyerLaborPipette"
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
            "valueReference" : {
              "reference" : "PractitionerRole/MarcMustermannGruppenpraxis"
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
            "valueReference" : {
              "reference" : "Patient/EmilKummer"
            }
          }
        ],
        "status" : "final",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721965002",
              "display" : "Laboratory order (record artifact)"
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
          "reference" : "Patient/EmilKummer"
        },
        "date" : "2020-03-31T11:46:09+02:00",
        "author" : [
          {
            "reference" : "PractitionerRole/PeterPrestoGruppenpraxis"
          }
        ],
        "title" : "Laboratory Order 2-pertussis with Service Request",
        "section" : [
          {
            "title" : "Laboratory Order with Service Request 2-pertussis",
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "721963009",
                  "display" : "Order (record artifact)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "ServiceRequest/2-pertussis-ServiceRequest"
              },
              {
                "reference" : "ServiceRequest/2-pertussis-ServiceRequestCBC"
              },
              {
                "reference" : "ServiceRequest/2-pertussis-ServiceRequestCRP"
              },
              {
                "reference" : "ServiceRequest/2-pertussis-ServiceRequestAddTest"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Patient/EmilKummer",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "EmilKummer",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_EmilKummer\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient EmilKummer</b></p><a name=\"EmilKummer\"> </a><a name=\"hcEmilKummer\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient.html\">CH Core Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Known Marital status of Patient\">Marital Status:</td><td colspan=\"3\"><span title=\"Codes:{http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus 1}\">ledig</span></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de-CH}\">Deutsch (Schweiz)</span> (preferred)</td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The registered place of birth of the patient. A sytem may use the address.text if they don't store the birthPlace address in discrete elements.\"><a href=\"http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-birthPlace.html\">Patient Birth Place</a></td><td colspan=\"3\">Paris Frankreich </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The place of origin of the patient.\"><a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-ech-11-placeoforigin.html\">Place of Origin according to eCH-0011</a></td><td colspan=\"3\">Köniz BE </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The patient's professed religious affiliations.\"><a href=\"http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-religion.html\">Patient Religion</a></td><td colspan=\"3\"><span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation 1041}\">Roman Catholic Church</span></td></tr></table></div>"
        },
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace",
            "valueAddress" : {
              "city" : "Paris",
              "country" : "Frankreich"
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
            "valueAddress" : {
              "city" : "Köniz",
              "state" : "BE"
            }
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-religion",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation",
                  "code" : "1041",
                  "display" : "Roman Catholic Church"
                }
              ]
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
            "value" : "80756011110123400004"
          }
        ],
        "name" : [
          {
            "family" : "Kummer",
            "given" : ["Emil"]
          }
        ],
        "gender" : "male",
        "birthDate" : "2017-05-05",
        "maritalStatus" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
              "code" : "1",
              "display" : "ledig"
            }
          ]
        },
        "communication" : [
          {
            "language" : {
              "coding" : [
                {
                  "system" : "urn:ietf:bcp:47",
                  "code" : "de-CH"
                }
              ],
              "text" : "Deutsch (Schweiz)"
            },
            "preferred" : true
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/PeterPresto",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "PeterPresto",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_PeterPresto\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner PeterPresto</b></p><a name=\"PeterPresto\"> </a><a name=\"hcPeterPresto\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner-epr.html\">CH Core Practitioner EPR</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601022050702, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/L248519</p><p><b>name</b>: Peter Presto (Official)</p><p><b>telecom</b>: ph: 032 333 22 33(Work), <a href=\"mailto:peter.presto@arztpraxis.ch\">peter.presto@arztpraxis.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601022050702"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "L248519"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Presto",
            "given" : ["Peter"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "032 333 22 33",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "peter.presto@arztpraxis.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Organization/Gruppenpraxis",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "Gruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_Gruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization Gruppenpraxis</b></p><a name=\"Gruppenpraxis\"> </a><a name=\"hcGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization-epr.html\">CH Core Organization EPR</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000241115</p><p><b>name</b>: Gruppenpraxis Olten</p><p><b>telecom</b>: <a href=\"tel:+41555556677\">+41555556677</a>, <a href=\"mailto:info@gruppenpraxis.ch\">info@gruppenpraxis.ch</a>, <a href=\"http://www.gruppenpraxis.ch\">http://www.gruppenpraxis.ch</a></p><p><b>address</b>: Gerbergasse 12 Olten 4600 CH </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000241115"
          }
        ],
        "name" : "Gruppenpraxis Olten",
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41555556677",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "info@gruppenpraxis.ch",
            "use" : "work"
          },
          {
            "system" : "url",
            "value" : "http://www.gruppenpraxis.ch",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Gerbergasse 12"],
            "city" : "Olten",
            "postalCode" : "4600",
            "country" : "CH"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/PeterPrestoGruppenpraxis",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "PeterPrestoGruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_PeterPrestoGruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole PeterPrestoGruppenpraxis</b></p><a name=\"PeterPrestoGruppenpraxis\"> </a><a name=\"hcPeterPrestoGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>practitioner</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#Practitioner_PeterPresto\">Practitioner Peter Presto (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_Gruppenpraxis\">Organization Gruppenpraxis Olten</a></p></div>"
        },
        "practitioner" : {
          "reference" : "Practitioner/PeterPresto"
        },
        "organization" : {
          "reference" : "Organization/Gruppenpraxis"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/MarcMustermann",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "MarcMustermann",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_MarcMustermann\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner MarcMustermann</b></p><a name=\"MarcMustermann\"> </a><a name=\"hcMarcMustermann\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html\">CH Core Practitioner</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000050700, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/L248519</p><p><b>name</b>: Marc Mustermann (Official)</p><p><b>telecom</b>: ph: 033 444 22 11(Work), <a href=\"mailto:marc.mustermann@gruppenpraxis.ch\">marc.mustermann@gruppenpraxis.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000050700"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "L248519"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Mustermann",
            "given" : ["Marc"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "033 444 22 11",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "marc.mustermann@gruppenpraxis.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/MarcMustermannGruppenpraxis",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "MarcMustermannGruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_MarcMustermannGruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole MarcMustermannGruppenpraxis</b></p><a name=\"MarcMustermannGruppenpraxis\"> </a><a name=\"hcMarcMustermannGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>practitioner</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Practitioner_MarcMustermann\">Practitioner Marc Mustermann (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_Gruppenpraxis\">Organization Gruppenpraxis Olten</a></p></div>"
        },
        "practitioner" : {
          "reference" : "Practitioner/MarcMustermann"
        },
        "organization" : {
          "reference" : "Organization/Gruppenpraxis"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/EvaErlenmeyer",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "EvaErlenmeyer",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_EvaErlenmeyer\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner EvaErlenmeyer</b></p><a name=\"EvaErlenmeyer\"> </a><a name=\"hcEvaErlenmeyer\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html\">CH Core Practitioner</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000050717, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/Y274589</p><p><b>name</b>: Eva Erlenmeyer (Official)</p><p><b>telecom</b>: ph: 033 444 55 66(Work), <a href=\"mailto:eva.erlenmeyer@labor-pipette.ch\">eva.erlenmeyer@labor-pipette.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000050717"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Erlenmeyer",
            "given" : ["Eva"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "033 444 55 66",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "eva.erlenmeyer@labor-pipette.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Organization/LaborPipette",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "LaborPipette",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_LaborPipette\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization LaborPipette</b></p><a name=\"LaborPipette\"> </a><a name=\"hcLaborPipette\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html\">CH Core Organization</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000234407</p><p><b>name</b>: Labor Pipette</p><p><b>telecom</b>: <a href=\"tel:+41223345566\">+41223345566</a>, <a href=\"mailto:info@labor-pipette.ch\">info@labor-pipette.ch</a>, <a href=\"http://www.labor-pipette.ch\">http://www.labor-pipette.ch</a></p><p><b>address</b>: Laborstrasse 23 Olten 4600 CH </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000234407"
          }
        ],
        "name" : "Labor Pipette",
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41223345566",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "info@labor-pipette.ch",
            "use" : "work"
          },
          {
            "system" : "url",
            "value" : "http://www.labor-pipette.ch",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Laborstrasse 23"],
            "city" : "Olten",
            "postalCode" : "4600",
            "country" : "CH"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/EvaErlenmeyerLaborPipette",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "EvaErlenmeyerLaborPipette",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_EvaErlenmeyerLaborPipette\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole EvaErlenmeyerLaborPipette</b></p><a name=\"EvaErlenmeyerLaborPipette\"> </a><a name=\"hcEvaErlenmeyerLaborPipette\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>identifier</b>: <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/K333333</p><p><b>practitioner</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Practitioner_EvaErlenmeyer\">Practitioner Eva Erlenmeyer (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_LaborPipette\">Organization Labor Pipette</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "K333333"
          }
        ],
        "practitioner" : {
          "reference" : "Practitioner/EvaErlenmeyer"
        },
        "organization" : {
          "reference" : "Organization/LaborPipette"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Serum-2-pertussis",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Serum-2-pertussis",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Serum-2-pertussis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Serum-2-pertussis</b></p><a name=\"Serum-2-pertussis\"> </a><a name=\"hcSerum-2-pertussis\"> </a><p><b>identifier</b>: 48736-12345-75465</p><p><b>accessionIdentifier</b>: 4e88a-12345-dd888</p><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 119364003}\">Serum specimen (specimen)</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-1-tvt-document-with-sr-and-form.html#Practitioner_PeterPresto\">Practitioner Peter Presto (official)</a></td><td>2015-08-16 06:40:17+0000</td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 702304001}\">Microcapillary blood transfer tube, clot activator (physical object)</span></td></tr></table></div>"
        },
        "identifier" : [
          {
            "value" : "48736-12345-75465"
          }
        ],
        "accessionIdentifier" : {
          "value" : "4e88a-12345-dd888"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "119364003",
              "display" : "Serum specimen (specimen)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPresto"
          },
          "collectedDateTime" : "2015-08-16T06:40:17Z"
        },
        "container" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "702304001",
                  "display" : "Microcapillary blood transfer tube, clot activator (physical object)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/ThroatSwab-2-pertussis",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "ThroatSwab-2-pertussis",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_ThroatSwab-2-pertussis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen ThroatSwab-2-pertussis</b></p><a name=\"ThroatSwab-2-pertussis\"> </a><a name=\"hcThroatSwab-2-pertussis\"> </a><p><b>identifier</b>: 48736-222333-75465</p><p><b>accessionIdentifier</b>: 4e88a-bc987-dd888</p><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 258529004}\">Throat swab (specimen)</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>receivedTime</b>: 2023-12-01 16:40:17+0000</p><p><b>request</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#ServiceRequest_2-pertussis-ServiceRequest\">ServiceRequest Respiratory disease screening (procedure)</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td><td><b>Method</b></td><td><b>BodySite</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-1-tvt-document-with-sr-and-form.html#Practitioner_PeterPresto\">Practitioner Peter Presto (official)</a></td><td>2023-12-01 06:40:17+0000</td><td><span title=\"Codes:{http://snomed.info/sct 418932006}\">Oral swab (specimen)</span></td><td><span title=\"Codes:{http://snomed.info/sct 312535008}\">Pharynx and/or larynx structures (body structure)</span></td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Identifier</b></td><td><b>Description</b></td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td>4e88a-bc987-dd888-12345</td><td>ESwab 486C tubes Copan</td><td><span title=\"Codes:{http://snomed.info/sct 706053007}\">General specimen container (physical object)</span></td></tr></table><p><b>note</b>: </p><blockquote><div><p>Some notes to Sample</p>\n</div></blockquote></div>"
        },
        "identifier" : [
          {
            "value" : "48736-222333-75465"
          }
        ],
        "accessionIdentifier" : {
          "value" : "4e88a-bc987-dd888"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "258529004",
              "display" : "Throat swab (specimen)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "receivedTime" : "2023-12-01T16:40:17Z",
        "request" : [
          {
            "reference" : "ServiceRequest/2-pertussis-ServiceRequest"
          }
        ],
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPresto"
          },
          "collectedDateTime" : "2023-12-01T06:40:17Z",
          "method" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "418932006",
                "display" : "Oral swab (specimen)"
              }
            ]
          },
          "bodySite" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "312535008",
                "display" : "Pharynx and/or larynx structures (body structure)"
              }
            ]
          }
        },
        "container" : [
          {
            "identifier" : [
              {
                "value" : "4e88a-bc987-dd888-12345"
              }
            ],
            "description" : "ESwab 486C tubes Copan",
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "706053007",
                  "display" : "General specimen container (physical object)"
                }
              ]
            }
          }
        ],
        "note" : [
          {
            "text" : "Some notes to Sample"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Blood-2-pertussis",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Blood-2-pertussis",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Blood-2-pertussis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Blood-2-pertussis</b></p><a name=\"Blood-2-pertussis\"> </a><a name=\"hcBlood-2-pertussis\"> </a><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 119297000}\">Blood sample</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td><td><b>BodySite</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-1-tvt-document-with-sr-and-form.html#Practitioner_PeterPresto\">Practitioner Peter Presto (official)</a></td><td>2015-08-16 06:40:17+0000</td><td><span title=\"Codes:{http://snomed.info/sct 49094006}\">Structure of capillary of skin (body structure)</span></td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 702306004}\">Microcapillary blood transfer tube, ethylene diamine tetraacetic acid (physical object)</span></td></tr></table></div>"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "119297000",
              "display" : "Blood sample"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPresto"
          },
          "collectedDateTime" : "2015-08-16T06:40:17Z",
          "bodySite" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "49094006",
                "display" : "Structure of capillary of skin (body structure)"
              }
            ]
          }
        },
        "container" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "702306004",
                  "display" : "Microcapillary blood transfer tube, ethylene diamine tetraacetic acid (physical object)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/2-pertussis-ServiceRequest",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2-pertussis-ServiceRequest",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_2-pertussis-ServiceRequest\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 2-pertussis-ServiceRequest</b></p><a name=\"2-pertussis-ServiceRequest\"> </a><a name=\"hc2-pertussis-ServiceRequest\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Urgent</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 171228002}\">Laboratory Order</span></p><p><b>orderDetail</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v2-0119 NW}\">Order Control code, New order/service</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>requester</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#PractitionerRole_PeterPrestoGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 772146005}\">Pertussis suspected (situation)</span></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "urgent",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "171228002",
              "display" : "Respiratory disease screening (procedure)"
            }
          ],
          "text" : "Laboratory Order"
        },
        "orderDetail" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0119",
                "code" : "NW",
                "display" : "New order/service"
              }
            ],
            "text" : "Order Control code, New order/service"
          }
        ],
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPrestoGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "772146005"
              }
            ],
            "text" : "Pertussis suspected (situation)"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/2-pertussis-ServiceRequestCBC",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2-pertussis-ServiceRequestCBC",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_2-pertussis-ServiceRequestCBC\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 2-pertussis-ServiceRequestCBC</b></p><a name=\"2-pertussis-ServiceRequestCBC\"> </a><a name=\"hc2-pertussis-ServiceRequestCBC\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>basedOn</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#ServiceRequest_2-pertussis-ServiceRequest\">ServiceRequest Respiratory disease screening (procedure)</a></p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Urgent</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 58410-2}, {http://loinc.org 1988-5}\">Laboratory Order</span></p><p><b>orderDetail</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v2-0119 NW}\">Order Control code, New order/service</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>requester</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#PractitionerRole_PeterPrestoGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 772146005}\">Pertussis suspected (situation)</span></p><p><b>specimen</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Specimen_Blood-2-pertussis\">Specimen: status = available; type = Blood sample</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/2-pertussis-ServiceRequest"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "urgent",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "58410-2",
              "display" : "CBC panel - Blood by Automated count"
            },
            {
              "system" : "http://loinc.org",
              "code" : "1988-5",
              "display" : "C reactive protein [Mass/Volume] in Serum or Plasma"
            }
          ],
          "text" : "Laboratory Order"
        },
        "orderDetail" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0119",
                "code" : "NW",
                "display" : "New order/service"
              }
            ],
            "text" : "Order Control code, New order/service"
          }
        ],
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPrestoGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "772146005"
              }
            ],
            "text" : "Pertussis suspected (situation)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Blood-2-pertussis"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/2-pertussis-ServiceRequestCRP",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2-pertussis-ServiceRequestCRP",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_2-pertussis-ServiceRequestCRP\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 2-pertussis-ServiceRequestCRP</b></p><a name=\"2-pertussis-ServiceRequestCRP\"> </a><a name=\"hc2-pertussis-ServiceRequestCRP\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>basedOn</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#ServiceRequest_2-pertussis-ServiceRequest\">ServiceRequest Respiratory disease screening (procedure)</a></p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Urgent</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 58410-2}, {http://loinc.org 1988-5}\">Laboratory Order</span></p><p><b>orderDetail</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v2-0119 NW}\">Order Control code, New order/service</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>requester</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#PractitionerRole_PeterPrestoGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 772146005}\">Pertussis suspected (situation)</span></p><p><b>specimen</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Specimen_Serum-2-pertussis\">Specimen: identifier = 48736-12345-75465; accessionIdentifier = 4e88a-12345-dd888; status = available; type = Serum specimen (specimen)</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/2-pertussis-ServiceRequest"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "urgent",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "58410-2",
              "display" : "CBC panel - Blood by Automated count"
            },
            {
              "system" : "http://loinc.org",
              "code" : "1988-5",
              "display" : "C reactive protein [Mass/Volume] in Serum or Plasma"
            }
          ],
          "text" : "Laboratory Order"
        },
        "orderDetail" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0119",
                "code" : "NW",
                "display" : "New order/service"
              }
            ],
            "text" : "Order Control code, New order/service"
          }
        ],
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPrestoGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "772146005"
              }
            ],
            "text" : "Pertussis suspected (situation)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Serum-2-pertussis"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/2-pertussis-ServiceRequestAddTest",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2-pertussis-ServiceRequestAddTest",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_2-pertussis-ServiceRequestAddTest\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 2-pertussis-ServiceRequestAddTest</b></p><a name=\"2-pertussis-ServiceRequestAddTest\"> </a><a name=\"hc2-pertussis-ServiceRequestAddTest\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>basedOn</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#ServiceRequest_2-pertussis-ServiceRequest\">ServiceRequest Respiratory disease screening (procedure)</a></p><p><b>status</b>: Active</p><p><b>intent</b>: Order</p><p><b>priority</b>: Urgent</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 90441-7}\">Bordetella pertussis and Bordetella parapertussis DNA panel - Nasopharynx</span></p><p><b>orderDetail</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v2-0119 XO}\">Order Control code, change order/service request</span></p><p><b>subject</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Patient_EmilKummer\">Emil Kummer  Male, DoB: 2017-05-05 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400004)</a></p><p><b>requester</b>: <a href=\"Bundle-1-tvt-document-with-sr-and-form.html#PractitionerRole_PeterPrestoGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 772146005}\">Pertussis suspected (situation)</span></p><p><b>specimen</b>: <a href=\"Bundle-2-pertussis-document-with-sr-and-form.html#Specimen_ThroatSwab-2-pertussis\">Specimen: identifier = 48736-222333-75465; accessionIdentifier = 4e88a-bc987-dd888; status = available; type = Throat swab (specimen); receivedTime = 2023-12-01 16:40:17+0000; note = Some notes to Sample</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/2-pertussis-ServiceRequest"
          }
        ],
        "status" : "active",
        "intent" : "order",
        "priority" : "urgent",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "90441-7",
              "display" : "Bordetella pertussis and Bordetella parapertussis DNA panel - Nasopharynx"
            }
          ]
        },
        "orderDetail" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0119",
                "code" : "XO",
                "display" : "Change order/service request"
              }
            ],
            "text" : "Order Control code, change order/service request"
          }
        ],
        "subject" : {
          "reference" : "Patient/EmilKummer"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPrestoGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "772146005"
              }
            ],
            "text" : "Pertussis suspected (situation)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/ThroatSwab-2-pertussis"
          }
        ]
      }
    }
  ]
}

```
