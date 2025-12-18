# Mobile Access to Health Documents (MHD) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Mobile Access to Health Documents (MHD)**

## Mobile Access to Health Documents (MHD)

This section specifies Swiss national extensions to the Mobile Access to Health Documents (MHD), which is [published](https://profiles.ihe.net/ITI/MHD/index.html) as an IHE ITI Trial Implementation profile.

The national extensions adds an additional transaction from the Document Source to the Document Recipient.

### Scope

An EPR App can query, retrieve or publish data to/from an EPR community using the transaction of the MHD profile. An EPR App can Update Document Metadata for a published document with this national extension.

### Use Cases

In addition to the Document Sharing Use Case for MHD the national extension defines the following Use Cases:

#### Document Metadata update from a Health Care professional with a primary system

A Healthcare professional has published a document in his own community for the patient but needs to update the metadata of the document. The healthcare professional updates the metadata (e.g. title) in the primary systems and submits the updated metadata to the community. The metadata which is allowed to be updated is defined in Annex 5.1 1.12.

#### Federated Cross Community Access

An EPR App can query and retrieve documents and data for a patient from an EPR Community independent in which community the documents / data are stored.

#### Patient changes confidentiality code of a document

A patient wants to change the confidentiality code of one of his documents. The patient updates the confidentiality code in the portal and the portal submits the updated metadata to the community where the document is stored (could be another community as where the patient has his reference community).

### Actors and Transactions

This figure shows the actors directly involved in the **Mobile Access to Health Documents** Profile and the relevant transactions between them.

The Find Document Lists [[ITI-66]](https://profiles.ihe.net/ITI/MHD/ITI-66.html) transaction defined in [MHD](https://profiles.ihe.net/ITI/MHD/index.html) SHALL not be made available in this context.

### Actor options

Options that can be selected for each actor in this profile, are listed in the table below.

| | | |
| :--- | :--- | :--- |
| Document Source | Comprehensive Metadata | R |
| Document Recipient | Comprehensive Metadata | R |
| Document Consumer | Comprehensive Metadata | R |
| Document Responder | Comprehensive MetadataFederated Cross Community Access | RR |

Table 1: Actor options.
#### Comprehensive Metadata Option

Comprehensive Metadata as defined in [1:33.2.1](https://profiles.ihe.net/ITI/MHD/1332_actor_options.html#13321-comprehensive-metadata-option). For all actors the Metadata as defined in Annex 3 SHALL be supported.

#### Federated Cross Community Access Option

The Federated Cross Community Access Option allows querying, retrieving documents and updating document metadata across communities.

A community and reference community SHALL support one Document Responder with the Federated Cross Community Access Option for EPR Apps. In addition a community and reference community SHALL support one Document Responder without the Federated Cross Community Access Option for other communities.

##### Querying and retrieving documents across communities

%%{ init: { 'theme': 'neutral', 'themeVariables': { 'fontSize': '14px' } } }%% flowchart LR A[Document Consumer] -->|Query| B(Document Responder Option Federated Cross Community Access Grouped with Document Consumer) B --> C(Document Responder own community) B --> D(Document Responders federated communities)

If a Document source queries a Document Responder with the Federated Cross Community Access Option then the Document Responder SHALL forward the query to all communities (including his own) to the Document Responder without the Federated Cross Community Access option and then aggregate and sort the results from all communities. A Document Responder SHALL ensure, that a followup retrieve of a document is handled by himself. If a community cannot be reached a warning SHALL be added to the query results. A Document Consumer SHALL be able to handle warnings if a Document Responder indicates that a community was not available.

%%{ init: { 'theme': 'neutral', 'themeVariables': { 'fontSize': '14px' } } }%% flowchart LR A[Document Consumer] -->|Retrieve| B(Document Responder Option Federated Cross Community Access Grouped with Document Consumer) B --> C{own community?} C -->|yes| D(Document Responder own community) C -->|no| E(Document Responder federated community)

For a retrieval a Document Responder SHALL identify if the document retrieve targets another community. If this is the case, it SHALL forward the request to the target community, otherwise the request can be handled directly.

##### Updating document metadata across communities

%%{ init: { 'theme': 'neutral', 'themeVariables': { 'fontSize': '14px' } } }%% flowchart LR A[Document Source] -->|Update Doc Metadata| B(Document Responder Option Federated Cross Community Access Grouped with Document Source) B --> C{own Community?} C -->|yes| D(Document Responder own community) C -->|no| E(Document Responder federated community)

With the Federated Cross Community Access option the Document Responder SHALL identify if a document metadata update targets another community. If this is the case, it SHALL forward the request to the target community, otherwise the request can be handled in the own community. If the remote community cannot be reached an error SHALL be generated by the Document Responser and the Document Source SHALL process this error.

Note: Except for additional error handling Document Source and Consumer need not to be aware that it is a federated system with multiple communities, this is transparent and the responder SHALL handle the necessary correlations of the document (metadata) to the communities.

### Required Actor Groupings

This national extension enforces authentication and authorization for access control. Therefore actors of this profile SHALL be grouped with actors of other profiles according to the following table:

| | | | |
| :--- | :--- | :--- | :--- |
| Document Recipient | IUA Resource Server | R | - |
| Document Responder | IUA Authorization Client | R | Proxy Option if Federated Cross Community Access Option is claimed, no Option otherwise |
| Document Source | IUA Authorization Client | R | Workflow Initiator Option or Technical User Option |
| Document Consumer | IUA Authorization Client | R | Workflow Initiator Option |

Table 2: Grouping of MHD actors required by this national extension.
### Process Flow

For the process flow of this profile and its interplay with the other profiles see [sequence diagrams](sequencediagrams.md).

### Security Consideration

This national extension enforces authentication and authorization of access to the Document Recipient and Document Responder using the IUA profile as described in [IUA](iti-71.md#expected-actions-1).

